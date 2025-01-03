<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>prueba</h1>
    <div class="container p4 border border-dark">
    <table id="datatable" class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name interfaces</th>
      <th scope="col">tipo</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody id="data">

  <script type="text/javascript">

    let url="interfaces.php"
    fetch(url)
    .then(response =>response.json())
    .then(data=>mostrarData(data))
    .catch(error => console.log(error))

    const mostrarData=(data)=>{
        console.log(data)
        let datos=""
        for(var i = 0; i<data.length; i++){
            datos+=`<tr>
            <td>${data[i].name}</td>
            <td>${data[i].mtu}</td>
            <td>${data[i].running}</td>
            <td>${data[i].disabled}</td> 
            </tr>`
        }

        document.getElementById('data').innerHTML= datos
    }

  </script>
    
  </tbody>
</table>
</div>
</body>
</html>