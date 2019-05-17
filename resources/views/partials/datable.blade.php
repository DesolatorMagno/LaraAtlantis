@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css">
@endpush
@push('script')
<!-- Datatables -->
<script src="{{ asset('atlantis/assets/js/plugin/datatables/datatables.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>

<script>
    $('#{{ $tableName }}').DataTable();

    function deleteForm(that) {
    //console.log(that);
    $.confirm({
        title: '{{ trans("general.delete") }}',
        content: '{{ trans("general.delete_confirmation") }}',
        type: 'red',
        typeAnimated: true,
        buttons: {
            delete: {

                text: '{{ trans("general.delete") }}',
                btnClass: 'btn-red',
                action: function() {
                    that.closest("form").submit()
                    return true;
                }
            },
            cancel: function () {
                //return false;
            },
        }
    });
    return false;
}
</script>
@endpush
