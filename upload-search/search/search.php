<!-- link with file: search-process.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Search</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <!-- Search Box -->
        <div class="mt-3">
            <h1>Word Search</h1>
            <input type="text" id="searchInput" class="form-control" placeholder="Search word...">
        </div>

        <!-- Search Results -->
        <div id="searchResults" class="mt-3"></div>
    </div>

    <!-- JavaScript for handling search -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Function to handle search
        $('#searchInput').on('input', function() {
            var searchQuery = $(this).val();
            if (searchQuery.length > 0) {
                $.ajax({
                    url: 'search-process.php',
                    type: 'POST',
                    data: { query: searchQuery },
                    success: function(data) {
                        $('#searchResults').html(data);
                    },
                    error: function() {
                        $('#searchResults').html('<p>Error fetching search results.</p>');
                    }
                });
            } else {
                $('#searchResults').empty();
            }
        });
    </script>
</body>
</html>
