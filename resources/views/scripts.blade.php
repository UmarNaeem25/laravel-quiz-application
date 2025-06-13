<script>
    $(document).ready(function() {
        let currentPage = 0;
        const $pages = $('.question-page');
        const totalPages = $pages.length;

        function showPage(index) {
            $pages.hide();
            $pages.eq(index).show();

            $('#prevBtn').prop('disabled', index === 0);

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
    });
</script>
