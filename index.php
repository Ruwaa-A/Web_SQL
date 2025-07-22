<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Form</title>
    <style>

      body {
            font-family: 'Inter', sans-serif;
            background-color: ivory;
            display: flex; 
            flex-direction: column; 
            align-items: center; 
            justify-content: center; 
            min-height: 100vh; 
            margin: 0; 
            padding: 1rem; 
            box-sizing: border-box; 
        }



        .container {
            background-color: white;
            padding: 2rem; 
            border-radius: 0.75rem; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 28rem; 
            width: 100%; 
        }

        h2 {
            color:purple ; 
            font-size: 1.5rem; 
            font-weight: bold;
            margin-bottom: 1.5rem; 
            text-align: center;
        }

        .form-group {
            margin-bottom: 1rem; 
        }

        label {
            display: block; 
            color: #374151;
            font-size: 0.875rem; 
            font-weight: 500; 
            margin-bottom: 0.25rem; 
        }

        input[type="text"] {
            width: 100%;
            padding: 0.75rem 1rem; 
            border: 1px solid #D1D5DB; 
            border-radius: 0.375rem; 
            box-sizing: border-box; 
        }

        input[type="text"]:focus {
            outline: none; 
            border-color: rgba(246, 92, 200, 0.5); 
            box-shadow: 0 0 0 2px rgba(139, 92, 246, 0.5); 
        }

        input[type="submit"] {
            background-color: rgba(246, 92, 197, 0.5); ple
            color: white;
            font-weight: bold;
            padding: 0.5rem 1.5rem; 
            border-radius: 0.5rem; 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
            transition: background-color 0.3s ease-in-out; 
            cursor: pointer;
            border: none; 
            display: block; 
            margin: 0 auto; 
        }

        input[type="submit"]:hover {
            background-color: #6D28D9; 
        }
    </style>
    
  </head>
  
  <body>

    <div class="container">
        <h2>Please, complete the information below:</h2>

        <form action="x.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="Age">Age:</label>
                <input type="text" id="Age" name="Age">
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>
