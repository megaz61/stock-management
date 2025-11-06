@extends('layouts.app')

@section('content')
    <div class="row mb-4">
        <div class="col">
            <h2 class="text-white"><i class="fas fa-exchange-alt"></i> Stock Transactions</h2>
        </div>
        <div class="col text-end">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTransactionModal">
                <i class="fas fa-plus"></i> New Transaction
            </button>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Product</th>
                            <th>Type</th>
                            <th>Quantity</th>
                            <th>Notes</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->id }}</td>
                                <td><strong>{{ $transaction->product->name }}</strong></td>
                                <td>
                                    @if ($transaction->type === 'in')
                                        <span class="badge bg-success"><i class="fas fa-arrow-up"></i> IN</span>
                                    @else
                                        <span class="badge bg-danger"><i class="fas fa-arrow-down"></i> OUT</span>
                                    @endif
                                </td>
                                <td>{{ $transaction->quantity }}</td>
                                <td>{{ $transaction->notes ?? '-' }}</td>
                                <td>{{ $transaction->created_at->format('d M Y H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No transactions found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $transactions->links() }}
            </div>
        </div>
    </div>

    <!-- Add Transaction Modal -->
    <div class="modal fade" id="addTransactionModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title"><i class="fas fa-plus-circle"></i> Add Transaction</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('admin.transactions.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Product</label>
                            <select name="product_id" class="form-select" required>
                                <option value="">Select Product</option>
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }} (Stock: {{ $product->stock }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Transaction Type</label>
                            <select name="type" class="form-select" required>
                                <option value="in">Stock IN (Penambahan)</option>
                                <option value="out">Stock OUT (Pengurangan)</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Quantity</label>
                            <input type="number" name="quantity" class="form-control" min="1" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Notes</label>
                            <textarea name="notes" class="form-control" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Transaction</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
