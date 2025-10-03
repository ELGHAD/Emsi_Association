@props([
    'action' => '',
    'method' => 'POST',
    'enctype' => false,
    'title' => '',
    'icon' => '',
    'cancelRoute' => '',
    'submitText' => 'Enregistrer'
])

<div class="container">
    <div class="form-container">
        <div class="form-card">
            <div class="card-header">
                <h5><i class="{{ $icon }} me-2"></i>{{ $title }}</h5>
            </div>
            <div class="card-body">
                <form action="{{ $action }}" method="POST" 
                    @if($enctype) enctype="multipart/form-data" @endif
                    class="needs-validation" novalidate>
                    @csrf
                    @if($method !== 'POST')
                        @method($method)
                    @endif
                    
                    {{ $slot }}

                    <div class="form-actions">
                        <a href="{{ $cancelRoute }}" class="btn btn-cancel btn-form">
                            <i class="fas fa-times me-2"></i>Annuler
                        </a>
                        <button type="submit" class="btn btn-success btn-form">
                            <i class="fas fa-save me-2"></i>{{ $submitText }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Form validation
    (function () {
        'use strict'
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
@endpush 