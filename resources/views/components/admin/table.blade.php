@props([
    'title' => '',
    'icon' => '',
    'createRoute' => '',
    'createText' => 'Ajouter',
    'headers' => [],
    'rows' => [],
    'actions' => true
])

<div class="container">
    <div class="table-container">
        <div class="table-card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5><i class="{{ $icon }} me-2"></i>{{ $title }}</h5>
                @if($createRoute)
                    <a href="{{ $createRoute }}" class="btn btn-success btn-sm">
                        <i class="fas fa-plus me-2"></i>{{ $createText }}
                    </a>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                @foreach($headers as $header)
                                    <th>{{ $header }}</th>
                                @endforeach
                                @if($actions)
                                    <th class="text-end">Actions</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            {{ $slot }}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.table-container {
    margin: 0 auto;
}

.table-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(25, 135, 84, 0.1);
    overflow: hidden;
    border: 1px solid rgba(25, 135, 84, 0.1);
}

.table-card .card-header {
    background: linear-gradient(45deg, #198754, #146c43);
    color: white;
    padding: 1.5rem;
    border: none;
}

.table-card .card-header h5 {
    margin: 0;
    font-weight: 600;
}

.table-card .card-body {
    padding: 1.5rem;
}

.table {
    margin-bottom: 0;
}

.table thead th {
    background-color: #e8f5e9;
    border-bottom: 2px solid #198754;
    color: #2c3e50;
    font-weight: 600;
    padding: 1rem;
}

.table tbody td {
    padding: 1rem;
    vertical-align: middle;
    border-bottom: 1px solid #e8f5e9;
}

.table tbody tr:hover {
    background-color: #f1f8e9;
}

.table .btn {
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
    border-radius: 5px;
    transition: all 0.3s ease;
}

.table .btn-success {
    background: linear-gradient(45deg, #198754, #146c43);
    border: none;
}

.table .btn-success:hover {
    background: linear-gradient(45deg, #146c43, #0f5132);
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(25, 135, 84, 0.2);
}

.table .btn-warning {
    background: linear-gradient(45deg, #ffc107, #ffb300);
    border: none;
    color: #000;
}

.table .btn-warning:hover {
    background: linear-gradient(45deg, #ffb300, #ffa000);
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(255, 193, 7, 0.2);
}

.table .btn-danger {
    background: linear-gradient(45deg, #dc3545, #bb2d3b);
    border: none;
}

.table .btn-danger:hover {
    background: linear-gradient(45deg, #bb2d3b, #a52834);
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(220, 53, 69, 0.2);
}

.table .btn i {
    margin-right: 0.5rem;
}

.table .badge {
    padding: 0.5em 1em;
    font-weight: 500;
    border-radius: 5px;
}

.table .badge-success {
    background: linear-gradient(45deg, #198754, #146c43);
    color: white;
}

.table .badge-warning {
    background: linear-gradient(45deg, #ffc107, #ffb300);
    color: #000;
}

.table .badge-danger {
    background: linear-gradient(45deg, #dc3545, #bb2d3b);
    color: white;
}

.table .badge-info {
    background: linear-gradient(45deg, #0dcaf0, #0aa2c0);
    color: #000;
}

.table .image-preview {
    width: 50px;
    height: 50px;
    object-fit: cover;
    border-radius: 5px;
    border: 2px solid #e8f5e9;
}

.table .actions {
    white-space: nowrap;
}

.table .actions .btn {
    margin-left: 0.5rem;
}

.table .actions .btn:first-child {
    margin-left: 0;
}

.table .empty-message {
    text-align: center;
    padding: 2rem;
    color: #6c757d;
}

.table .empty-message i {
    font-size: 2rem;
    margin-bottom: 1rem;
    color: #198754;
}

.avatar-placeholder {
    width: 40px;
    height: 40px;
    background: linear-gradient(45deg, #198754, #146c43);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
}

.table-responsive {
    scrollbar-width: thin;
    scrollbar-color: #198754 #e8f5e9;
}

.table-responsive::-webkit-scrollbar {
    width: 8px;
}

.table-responsive::-webkit-scrollbar-track {
    background: #e8f5e9;
}

.table-responsive::-webkit-scrollbar-thumb {
    background-color: #198754;
    border-radius: 4px;
}

.table-responsive::-webkit-scrollbar-thumb:hover {
    background-color: #146c43;
}
</style> 