{{-- Modal for Subscribe --}}

<div class="modal fade" id="bookmarkModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookmarkModalTitle"></h5>
                <button type="button" class="close" data-mdb-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="" action="/subscribe" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Your Email:</label>
                        <input type="email" id="inputemail" class="form-control" id="recipient-name" required>
                        @csrf
                        <input type="hidden" name="route" value="{{ Request::path() }}">
                        <input type="hidden" name="id" id="blogid" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success"> <i class="fa fa-bookmark"></i> Bookmark</button>
                </div>
            </form>
        </div>
    </div>
</div>