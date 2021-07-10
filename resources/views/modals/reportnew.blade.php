<style>
  
    </style>
        <div class="modal-content mb-5" style="  background: var(--darkerShade);">
            <div class="modal-header" style="border-bottom: 1px solid #dee2e699;">
                <h5 class="modal-title" id="exampleModalLabel">Report "{{ $blog->title }}"</h5>
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
            </div>
            <form action="/report" method="POST">
                <input type="hidden" name="route" value="{{ Request::path() }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name:</label>
                        <input name="name" type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email:</label>
                        <input name="email" type="email" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Reason/Feedback:</label>
                        <textarea name="report" class="form-control" id="message-text"></textarea>
                    </div>
                </div>
                <div class="modal-footer" style="border-top: 1px solid #dee2e699;">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" style="background-color:var(--blue);color:white;"class="btn">Report</button>
                </div>
            </form>
        </div>
    
