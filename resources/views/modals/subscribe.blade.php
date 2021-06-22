{{-- Modal for Subscribe --}}

<div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Subsribe to Our Mailing List</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="" action="/subscribe" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Your Email:</label>
                        <input type="email" class="form-control" id="recipient-name" required>
                        @csrf
                        <input type="hidden" name="route" value="{{ Request::path() }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Subscribe</button>
                </div>
            </form>
        </div>
    </div>
</div>
