@foreach($roles as $role)
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="{{ $role->id }}" id="role-{{ $role->id }}">
        <label class="form-check-label" for="role-{{ $role->id }}">{{ $role->name }}</label>
    </div>
@endforeach