<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Code Editor</title>
    
    <style>
        body { font-family: sans-serif; }
        .container { display: flex; }
        .panel { width: 50%; padding: 10px; }
        textarea {
            width: 100%;
            height: 400px;
            border: 1px solid blaCK;
        }
        iframe {
            width: 100%;
            height: 400px;
            border: 1px solid black;
            background: white;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background: cyan;
            color: black;
            border: none;
            cursor: pointer;
            margin: 10px 0;
        }
    </style>
</head>
<body>

    <h2>3.3 HTML</h2>
    <button id="runButton">Run</button>

    <div class="container">
        <div class="panel">
            <h3>Code:</h3>
            <textarea id="codeInput"><h1>This is a Heading</h1>
<p>This is a paragraph.</p></textarea>
        </div>
        <div class="panel">
            <h3>Output:</h3>
            <iframe id="outputFrame"></iframe>
        </div>
    </div>

    <script>
        function updateOutput() {
            // Get the code from the textarea
            let code = document.getElementById('codeInput').value;
            
            // Get the iframe
            let iframe = document.getElementById('outputFrame');
            
            // Write the code into the iframe
            // 'srcdoc' is a secure way to render user-provided HTML
            iframe.srcdoc = code;
        }

        // Run the function when the "Run" button is clicked
        document.getElementById('runButton').addEventListener('click', updateOutput);

        // Also run it once on page load
        updateOutput();
    </script>

</body>
</html>