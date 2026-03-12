<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * Display a listing of subscribers with optional search.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = NewsletterSubscriber::query()
            ->orderBy('subscribed_at', 'desc');

        if ($search) {
            $query->where('email', 'like', '%' . $search . '%');
        }

        $subscribers = $query->paginate(15)->withQueryString();

        $totalCount    = NewsletterSubscriber::count();
        $activeCount   = NewsletterSubscriber::where('is_active', true)->count();
        $inactiveCount = NewsletterSubscriber::where('is_active', false)->count();

        return view('admin.subscribers.index', compact(
            'subscribers',
            'search',
            'totalCount',
            'activeCount',
            'inactiveCount'
        ));
    }

    /**
     * Toggle the active status of a subscriber.
     */
    public function toggle(NewsletterSubscriber $subscriber)
    {
        $subscriber->update(['is_active' => !$subscriber->is_active]);

        $status = $subscriber->is_active ? 'activado' : 'desactivado';

        return redirect()
            ->back()
            ->with('success', "Suscriptor {$status} correctamente.");
    }

    /**
     * Remove the specified subscriber from storage.
     */
    public function destroy(NewsletterSubscriber $subscriber)
    {
        $email = $subscriber->email;
        $subscriber->delete();

        return redirect()
            ->route('admin.subscribers.index')
            ->with('success', "El suscriptor {$email} ha sido eliminado.");
    }

    /**
     * Export all subscribers as an Excel (.xlsx) file.
     */
    public function export()
    {
        $subscribers = NewsletterSubscriber::orderBy('subscribed_at', 'desc')->get();

        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet       = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Suscriptores');

        // --- Header row ---
        $headers = ['#', 'Email', 'Estado', 'Fecha de suscripción'];
        foreach ($headers as $colIndex => $header) {
            $coordinate = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($colIndex + 1) . '1';
            $cell       = $sheet->getCell($coordinate);
            $cell->setValue($header);
            $cell->getStyle()->getFont()->setBold(true)->setSize(11);
            $cell->getStyle()->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()->setARGB('FF1C1C1C');
            $cell->getStyle()->getFont()->getColor()->setARGB('FFFFFFFF');
            $cell->getStyle()->getAlignment()
                ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER)
                ->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
        }

        // --- Data rows ---
        foreach ($subscribers as $index => $subscriber) {
            $row = $index + 2;

            // Resolve date
            if ($subscriber->subscribed_at) {
                $date = $subscriber->subscribed_at->format('d/m/Y H:i');
            } elseif ($subscriber->created_at) {
                $date = $subscriber->created_at->format('d/m/Y H:i');
            } else {
                $date = '—';
            }

            $sheet->setCellValue('A' . $row, $index + 1);
            $sheet->setCellValue('B' . $row, $subscriber->email);
            $sheet->setCellValue('C' . $row, $subscriber->is_active ? 'Activo' : 'Inactivo');
            $sheet->setCellValue('D' . $row, $date);

            // Color the Estado cell
            $statusCell  = $sheet->getCell('C' . $row);
            $statusColor = $subscriber->is_active ? 'FFD1FAE5' : 'FFF3F4F6'; // green-100 / neutral-100
            $statusCell->getStyle()->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()->setARGB($statusColor);

            // Zebra striping for even rows
            if ($index % 2 === 1) {
                $sheet->getStyle('A' . $row . ':D' . $row)
                    ->getFill()
                    ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                    ->getStartColor()->setARGB('FFF9FAFB');
            }
        }

        // --- Auto-size columns ---
        foreach (range(1, 4) as $colIndex) {
            $columnLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($colIndex);
            $sheet->getColumnDimension($columnLetter)->setAutoSize(true);
        }

        // --- Borders on all cells ---
        $lastRow = $subscribers->count() + 1;
        $sheet->getStyle('A1:D' . max($lastRow, 1))
            ->getBorders()->getAllBorders()
            ->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN)
            ->getColor()->setARGB('FFE5E7EB');

        // --- Freeze header row ---
        $sheet->freezePane('A2');

        $filename = 'suscriptores_' . now()->format('Y-m-d') . '.xlsx';

        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

        return response()->streamDownload(function () use ($writer) {
            $writer->save('php://output');
        }, $filename, [
            'Content-Type'        => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'Content-Disposition' => "attachment; filename=\"{$filename}\"",
            'Cache-Control'       => 'max-age=0',
        ]);
    }
}
