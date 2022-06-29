@section('page-css')
<style>
    .error{
        color: red;
    }
</style>
@endsection
<div class="modal fade" id="saveSearch" tabindex="-1" role="dialog"
 aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <form  action="{{ route('front.save_search') }}" method="post" class="ajaxForm">
            @csrf
            <input type="hidden" name="user_id" id="user_id" value="{{$userId ?? ''}}">
            <input type="hidden" name="category_id" id="category_id" value="{{$categoryId ?? ''}}">
            <input type="hidden" name="request" id="request" value="{{$categoryId ?? ''}}">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Save this search</h5>
                 <button type="button" class="close btn bnt-light" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <div class="form-group">
                     <label for="">Choose a name for this search (maximum of 30
                         characters)</label><br><br>
                     <input type="text" name="search" id="search"
                         placeholder="Save search" class="form-control" maxlength="30" required>
                 </div>
             </div>
             <div class="modal-footer">
                 <button type="submit" class="btn btn-primary" id="search_btn">Save Search</button>
             </div>
         </form>
     </div>
 </div>
</div>
@section('page-script')
<script>
    $(document).ready(function() {
            validations = $(".ajaxForm").validate();
            $('.ajaxForm').submit(function(e) {
                e.preventDefault();
                validations = $(".ajaxForm").validate();
                if (validations.errorList.length != 0) {
                    return false;
                }
                var url = $(this).attr('action');
                $("#search_btn").attr('disabled', true);
                var param = $(".ajaxForm").serializeArray()
                getAjaxRequests(url, param, 'post', function (param) {
                $("#search_btn").attr('disabled', false);
                  },loader=true);
            })
        });
</script>
@endsection
