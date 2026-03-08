@extends('admin.layouts.app')

@section('header', 'Gestión de Usuarios')

@section('content')
<!-- Notification Messages -->
@if(session('success'))
<div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-lg flex items-center gap-3">
    <span class="material-symbols-outlined">check_circle</span>
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-lg flex items-center gap-3">
    <span class="material-symbols-outlined">error</span>
    {{ session('error') }}
</div>
@endif

@if($errors->any())
<div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-700 rounded-lg flex items-start gap-3">
    <span class="material-symbols-outlined mt-0.5">warning</span>
    <div>
        <h4 class="font-bold mb-1">Hay errores en el formulario:</h4>
        <ul class="list-disc pl-5 text-sm">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

<!-- Users Section -->
<div class="bg-white rounded-xl shadow-sm border border-neutral-100 p-6 lg:p-8">
    <div class="flex items-center justify-between mb-6">
        <h3 class="text-xl font-bold text-secondary">Gestión de Usuarios</h3>
        <button onclick="openModal()" class="bg-primary text-secondary font-bold py-2 px-4 rounded-lg hover:bg-yellow-500 transition-colors flex items-center gap-2">
            <span class="material-symbols-outlined">add</span>
            Nuevo Usuario
        </button>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full text-left min-w-[600px]">
            <thead>
                <tr class="border-b border-neutral-200 text-neutral-500 text-sm">
                    <th class="py-3 px-4 font-medium">Nombre</th>
                    <th class="py-3 px-4 font-medium">Email</th>
                    <th class="py-3 px-4 font-medium">Rol</th>
                    <th class="py-3 px-4 font-medium text-right">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="border-b border-neutral-100 hover:bg-neutral-50 transition-colors">
                    <td class="py-3 px-4 text-secondary font-medium">{{ $user->name }}</td>
                    <td class="py-3 px-4 text-neutral-600">{{ $user->email }}</td>
                    <td class="py-3 px-4">
                        <span class="px-2 py-1 text-xs font-bold rounded-full {{ $user->role === 'admin' ? 'bg-purple-100 text-purple-700' : 'bg-blue-100 text-blue-700' }}">
                            {{ ucfirst($user->role) }}
                        </span>
                    </td>
                    <td class="py-3 px-4 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <button onclick="editUser({{ $user->id }}, '{{ addslashes($user->name) }}', '{{ addslashes($user->email) }}', '{{ $user->role }}')" class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 hover:bg-emerald-100 flex items-center justify-center transition-colors" title="Editar">
                                <span class="material-symbols-outlined text-[20px]">edit</span>
                            </button>
                            
                            @if(auth()->id() !== $user->id)
                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline-block" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este usuario? Esta acción no se puede deshacer.');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-8 h-8 rounded-lg bg-red-50 text-red-600 hover:bg-red-100 flex items-center justify-center transition-colors" title="Eliminar">
                                    <span class="material-symbols-outlined text-[20px]">delete</span>
                                </button>
                            </form>
                            @else
                            <button disabled class="w-8 h-8 rounded-lg bg-neutral-100 text-neutral-400 flex items-center justify-center cursor-not-allowed" title="No puedes eliminarte a ti mismo">
                                <span class="material-symbols-outlined text-[20px]">delete</span>
                            </button>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal for Create/Edit User -->
<div id="userModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 hidden opacity-0 transition-opacity">
    <div class="bg-white rounded-xl shadow-xl w-full max-w-md mx-4 transform scale-95 transition-transform duration-200" id="userModalContent">
        <div class="flex items-center justify-between p-6 border-b border-neutral-100">
            <h3 class="text-xl font-bold text-secondary" id="modalTitle">Nuevo Usuario</h3>
            <button onclick="closeModal()" class="text-neutral-400 hover:text-red-500 transition-colors">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>
        
        <form id="userForm" action="{{ route('admin.users.store') }}" method="POST">
            @csrf
            <input type="hidden" name="_method" id="formMethod" value="POST">
            
            <div class="p-6 space-y-4">
                <div>
                    <label for="name" class="block text-sm font-bold text-secondary mb-1">Nombre Completo</label>
                    <input type="text" name="name" id="name" required class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring-primary h-11">
                </div>
                
                <div>
                    <label for="email" class="block text-sm font-bold text-secondary mb-1">Correo Electrónico</label>
                    <input type="email" name="email" id="email" required class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring-primary h-11">
                </div>
                
                <div>
                    <label for="password" class="block text-sm font-bold text-secondary mb-1">Contraseña <span id="passwordHint" class="text-neutral-500 font-normal text-xs hidden">(Dejar en blanco para no cambiar)</span></label>
                    <input type="password" name="password" id="password" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring-primary h-11">
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-bold text-secondary mb-1">Confirmar Contraseña</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring-primary h-11">
                </div>
                
                <div>
                    <label for="role" class="block text-sm font-bold text-secondary mb-1">Rol del Usuario</label>
                    <select name="role" id="role" required class="w-full rounded-lg border-neutral-300 shadow-sm focus:border-primary focus:ring-primary h-11">
                        <option value="user">Usuario normal</option>
                        <option value="admin">Administrador (Acceso total)</option>
                    </select>
                </div>
            </div>
            
            <div class="p-6 border-t border-neutral-100 bg-neutral-50 rounded-b-xl flex justify-end gap-3">
                <button type="button" onclick="closeModal()" class="px-5 py-2 rounded-lg text-neutral-600 font-medium hover:bg-neutral-200 transition-colors">
                    Cancelar
                </button>
                <button type="submit" class="px-5 py-2 rounded-lg bg-primary text-secondary font-bold hover:bg-yellow-500 transition-colors" id="submitBtn">
                    Guardar Usuario
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const modal = document.getElementById('userModal');
    const modalContent = document.getElementById('userModalContent');
    const userForm = document.getElementById('userForm');
    const formMethod = document.getElementById('formMethod');
    const modalTitle = document.getElementById('modalTitle');
    const submitBtn = document.getElementById('submitBtn');
    const passwordHint = document.getElementById('passwordHint');
    
    // Form fields
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const roleSelect = document.getElementById('role');
    const passwordInput = document.getElementById('password');
    const passwordConfirmationInput = document.getElementById('password_confirmation');

    function openModal() {
        // Reset form for create
        userForm.reset();
        userForm.action = "{{ route('admin.users.store') }}";
        formMethod.value = "POST";
        modalTitle.textContent = "Nuevo Usuario";
        submitBtn.textContent = "Crear Usuario";
        passwordHint.classList.add('hidden');
        passwordInput.required = true;
        
        // Show modal with animation
        modal.classList.remove('hidden');
        // Small delay to allow display flex to apply before opacity transition
        setTimeout(() => {
            modal.classList.replace('opacity-0', 'opacity-100');
            modalContent.classList.replace('scale-95', 'scale-100');
        }, 10);
    }

    function editUser(id, name, email, role) {
        // Prepare form for edit
        userForm.reset();
        userForm.action = `/admin/users/${id}`;
        formMethod.value = "PUT";
        modalTitle.textContent = "Editar Usuario";
        submitBtn.textContent = "Actualizar";
        
        // Populate fields
        nameInput.value = name;
        emailInput.value = email;
        roleSelect.value = role;
        
        // Passwords are not required on edit
        passwordInput.required = false;
        passwordHint.classList.remove('hidden');
        
        // Show modal
        modal.classList.remove('hidden');
        setTimeout(() => {
            modal.classList.replace('opacity-0', 'opacity-100');
            modalContent.classList.replace('scale-95', 'scale-100');
        }, 10);
    }

    function closeModal() {
        modal.classList.replace('opacity-100', 'opacity-0');
        modalContent.classList.replace('scale-100', 'scale-95');
        
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300); // Matches transition duration
    }

    // Close modal on click outside
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });
</script>
@endsection
