<?= $this->extend("templates/base"); ?>
<?= $this->section("content"); ?>

<style>
  * {
  font-family: Nunito, sans-serif;
}
        section {
            margin: 0 auto;
            max-width: 2000px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }
        section h1 {
            margin-bottom: 2.5rem;
        }
        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }
        section pre {
            background-color: rgba(247, 248, 249, 1);
            border: 1px solid rgba(242, 242, 242, 1);
            display: block;
            font-size: .9rem;
            margin: 2rem 0;
            padding: 1rem 1.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }
        section code {
            display: block;
        }
        section a {
            color: rgba(221, 72, 20, 1);
        }
        section svg {
            margin-bottom: -5px;
            margin-right: 5px;
            width: 25px;
        }
        section img {
            align: right;
        }
/* Three columns side by side */
.column {
  float: left;
  width: 30%;
  margin-bottom: 16px;
  padding: 0 8px;
}
.row {margin: 0 -5px;}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Add some shadows to create a card effect */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
  padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
<html>
<head>
      <title> <?= $title; ?> </title>
</head>
<section>

    <h1> <?= $header; ?></h1>

    <pre><code>Honakoak dira Lizarragaren eskuizkribuen edizioak:</code></pre>
  
    <?php if ($edizioa !== []): ?>
        <?php foreach ($edizioa as $edi): ?>
            <div class="row">
                <div class="column">
                    <div class="card">
                        <img src="<?= base_url("assets/img/edi$edi->Zenbakia.jpg")?>" alt="" style="width:100%">
                        <div class="container">
                            <h2><?= $edi-> Izenburua;?></h2>
                            <p class="urtea"><?= $edi->Urtea;?></p>
                            <p><?= $edi->Mota;?></p>
                            <p><form method="GET" action="/edizioxehetasunak"><input type= "hidden" name="zka" value="<?= $edi->Zenbakia;?>"><button class="button" type="submit">Xehetasunak</button></form></p>
                        </div>
                    </div>
                </div>
            
            

        <?php endforeach ?>
    
        </table>
    <?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

    <?php endif ?>
    
      
    </ul>
</section>
   
</body>
</html>
<?= $this->endSection(); ?> 
