<script>
    $(document).ready(function() {
        let currentPage = 0;
        const $pages = $('.question-page');
        const totalPages = $pages.length;

        function showPage(index) {
            $pages.hide();
            $pages.eq(index).show();

            $('#prevBtn').toggle(index > 0);

            $('#nextBtn').toggle(index < totalPages - 1);

            if (index === totalPages - 1) {
                $('#submitBtn').removeClass('d-none');
            } else {
                $('#submitBtn').addClass('d-none');
            }
        }

        $('#prevBtn').on('click', function() {
            if (currentPage > 0) {
                currentPage--;
                showPage(currentPage);
            }
        });

        $('#nextBtn').on('click', function() {
            if (currentPage < totalPages - 1) {
                currentPage++;
                showPage(currentPage);
            }
        });

        showPage(currentPage);

        if ($('#submitBtn').length == 0) {
            localStorage.removeItem('timer');
        }

        if (!localStorage.getItem('timer') && $('#submitBtn').length > 0) {
            localStorage.setItem('timer', "5:01");
        }

        var timer2 = localStorage.getItem('timer');

        var interval = setInterval(function() {
            var timer = timer2.split(':');
            var minutes = parseInt(timer[0], 10);
            var seconds = parseInt(timer[1], 10);

            --seconds;
            if (seconds < 0) {
                --minutes;
                seconds = 59;
            }

            if (minutes < 0) {
                clearInterval(interval);
                localStorage.removeItem('timer');
                $('.form').submit();
                return;
            }

            seconds = (seconds < 10) ? '0' + seconds : seconds;
            $('.countdown').html(minutes + ':' + seconds);

            timer2 = minutes + ':' + seconds;
            localStorage.setItem('timer', timer2);
        }, 1000);

        $('.form').submit(function() {
            localStorage.removeItem('timer');
        })

    });
</script>
