<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="<?php echo CHARSET ?>">
  <title><?php echo TITLE ?></title>
  <style type="text/css">

    ::selection { background-color: #E13300; color: white; }
    ::-moz-selection { background-color: #E13300; color: white; }

    body {
      background-color: #fff;
      margin: 40px;
      font: 13px/20px normal Helvetica, Arial, sans-serif;
      color: #4F5155;
    }

    h1 {
      color: #444;
      background-color: transparent;
      border-bottom: 1px solid #D0D0D0;
      font-size: 19px;
      font-weight: normal;
      margin: 0 0 14px 0;
      padding: 14px 15px 10px 15px;
    }

    code {
      font-family: Consolas, Monaco, Courier New, Courier, monospace;
      font-size: 12px;
      background-color: #f9f9f9;
      border: 1px solid #D0D0D0;
      color: #002166;
      display: block;
      margin: 14px 0 14px 0;
      padding: 12px 10px 12px 10px;
    }

    #body {
      margin: 0 15px 0 15px;
    }

    p.footer {
      text-align: right;
      font-size: 11px;
      border-top: 1px solid #D0D0D0;
      line-height: 32px;
      padding: 0 10px 0 10px;
      margin: 20px 0 0 0;
    }

    #container {
      margin: 10px;
      border: 1px solid #D0D0D0;
      box-shadow: 0 0 8px #D0D0D0;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border-spacing: 0;
      margin-bottom: 20px;
    }

    table tr:nth-child(2n-1) td {
      background: #F5F5F5;
    }

    table th,
    table td {
      text-align: center;
    }

    table th {
      padding: 5px 20px;
      color: #030303;
      border-bottom: 1px solid #C1CED9;
      white-space: nowrap;        
      font-weight: normal;
    }

    table .service,
    table .desc {
      text-align: left;
    }

    table td {
      padding: 20px;
      text-align: center;
    }

    table td.service,
    table td.desc {
      vertical-align: top;
    }

    table td.unit,
    table td.qty,
    table td.total {
      font-size: 1.2em;
    }

    table td.grand {
      border-top: 1px solid #5D6975;;
    }
  </style>
</head>
<body>
  <div id="container">
    <h1><?php echo TITLE ?>!</h1>
    <div id="body">
      <p><?php echo DESCRIPTION ?></p>
      <p>Si desea editar esta página, la encontrará ubicada en:</p>
      <code>views/welcome.php</code>
      <p>El controlador correspondiente para esta página se encuentra en:</p>
      <code>controllers/Welcome.php</code>
      <p>Para acceder al controlador correspondiente para esta página desde la url:</p>
      <code>www.example.com/index?c=welcome</code>
      <p>Para acceder al metodo dentro del controlador correspondiente para esta página desde la url:</p>
      <code>www.example.com/index?c=welcome&m=index</code>
      <p>Para agregar un parametro al metodo dentro del controlador correspondiente para esta página desde la url:</p>
      <code>www.example.com/index?c=welcome&m=index&i=parametro</code>
      <code>
        <table>
          <thead>
            <tr>
              <th width="1px">ID</th>
              <th>CAMPO1</th>
              <th>CAMPO2</th>
              <th>CAMPO3</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['listar'] as $l): ?>
              <tr>
                <td><?php echo $l->id; ?></td>
                <td><?php echo $l->campo1; ?></td>
                <td><?php echo $l->campo2; ?></td>
                <td><?php echo $l->campo3; ?></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </code>
    </div>
    <p class="footer"><?php echo COPYRIGHT.' - '.AUTHOR ?></p>
</div>

</body>
</html>