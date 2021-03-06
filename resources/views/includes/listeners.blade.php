<script>
    Livewire.on('toastr', param => {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: param['type'],
            title: param['message']
        })
    });

    Livewire.on('alert', param => {
        Swal.fire(
            param['title'] ?? '',
            param['message'],
            param['type']
        )
    });

</script>