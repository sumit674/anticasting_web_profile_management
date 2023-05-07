<style>
    .jq-toast-wrap {
        display: block;
        position: fixed;
        width: 290px !important;
        pointer-events: none !important;
        margin: 0;
        padding: 0;
        letter-spacing: normal;
        z-index: 9000 !important;
    }
</style>
<script>
    @if ($message = Session::get('success'))
        $.toast({
            heading: 'Success',
            text: '{{ $message }}',
            showHideTransition: 'slide',
            icon: 'success',
            position: 'top-right',
            allowToastClose: true, // Show the close button or not
            hideAfter: 15000,
        })
    @endif

    @if ($message = Session::get('error'))
        $.toast({
            heading: 'Error',
            text: '{{ $message }}',
            showHideTransition: 'slide',
            icon: 'error',
            position: 'top-right',
            allowToastClose: true, // Show the close button or not
            hideAfter: 15000,
        });
    @endif

    @if ($message = Session::get('warning'))
        $.toast({
            heading: 'Warning',
            text: '{{ $message }}',
            showHideTransition: 'slide',
            icon: 'warning',
            position: 'top-right',
            allowToastClose: true, // Show the close button or not
            hideAfter: 15000,
        });
    @endif

    @if ($message = Session::get('info'))
        $.toast({
            heading: 'Info',
            text: '{{ $message }}',
            showHideTransition: 'slide',
            icon: 'info',
            position: 'top-right',
            allowToastClose: true, // Show the close button or not
            hideAfter: 15000,
        });
    @endif

    @if ($errors->any())
        $.toast({
            heading: 'Info',
            text: 'Please check the form below for errors',
            showHideTransition: 'slide',
            icon: 'info',
            position: 'top-right',
            allowToastClose: true, // Show the close button or not
            hideAfter: 15000,
        });
    @endif

    // $.toast({
    //         heading: 'Info',
    //         text: 'Please check the form below for errors',
    //         showHideTransition: 'slide',
    //         icon: 'info',
    //         position: 'top-right',
    //         allowToastClose: true, // Show the close button or not
    //         hideAfter: 155000,
    //     });
</script>
