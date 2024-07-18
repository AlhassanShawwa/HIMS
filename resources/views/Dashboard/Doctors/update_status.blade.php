<!-- Modal -->
<div class="modal fade" id="update_status{{ $doctor->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    {{ __('doctors.Status_change') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('update_status') }}" method="post" autocomplete="off">
                {{ csrf_field() }}
                <div class="modal-body">

                    <div class="form-group">
                        <label for="status">{{__('doctors.Status')}}</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="" selected disabled>--{{__('doctors.Choose')}}--</option>
                            <option value="1">{{__('doctors.Enabled')}}</option>
                            <option value="0">{{__('doctors.Not_enabled')}}</option>
                        </select>
                    </div>

                    <input type="hidden" name="id" value="{{ $doctor->id }}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Dashboard/sections_trans.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{__('Dashboard/sections_trans.submit')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
