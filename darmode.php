<html>
<head>
    <title>Dark Mode/Light Mode Toggle</title>
    <style>
        /* Default styles for light mode */
        body {
            background-color: white;
            color: black;
            transition: all 0.5s ease;
        }
        /* Styles for dark mode */
        .dark-mode {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
<h1>Dark Mode/Light Mode Toggle</h1>
<button id="toggle-mode">Toggle Mode</button>
</body>
<script>
    const toggleBtn = document.getElementById("toggle-mode");
    const body = document.body;

    toggleBtn.addEventListener("click", () => {
        body.classList.toggle("dark-mode");
    });
</script>
</html>
