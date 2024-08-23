<?= $this->extend("templates/base"); ?>

<?= $this->section("content"); ?>

<style>
    * {
  font-family: Nunito, sans-serif;
}
        section {
            margin: 0 auto;
            max-width: 1100px;
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

</style>
<html>
<head>
      <title> center; <?= $title; ?> </title>
</head>
<section>

    <h1> <?= $header; ?></h1>

    <pre><code>Honakoak dira ezagutzen diren Lizarragaren eskuizkribuak:</code></pre>

    <?php if ($eskuizkribu !== []): ?>
        <table border="1" cellpadding="4" cellspacing="0">
            <tr>
                <th>Zk</th>
                <th>Urtea</th>
                <th>Izenburua</th>
                <th>Neurria</th>
                <th>Orrialdeak</th>
                <th>Jatorrizkoa non</th>
                <th>Signatura</th>
                <th>Editatua</th>
                <th>Izenburu osoa</th>
                <th>Oharrak</th>
            </tr>

    <?php foreach ($eskuizkribu as $esk): ?>
            <tr>
                <td><?= $esk->zk;?></td>
                <td><?= $esk->urtea;?></td>
                <td><?= $esk->izenburua;?></td>
                <td><?= $esk->neurria;?></td>
                <td><?= $esk->orrialdeak;?></td>
                <td><?= $esk->non;?></td>
                <td><?= $esk->signatura;?></td>
                <td><?= $esk->editatua;?></td> 
                <td><?= $esk->izenburu_osoa;?></td>
                <td><?= $esk->oharrak;?></td>                 
            </tr>
        

    <?php endforeach ?>
    
        </table>
        <table border="1" cellpadding="4" cellspacing="0">
            <tr>
                <th>Zk</th>
                <th>Izenburua</th>
                <th>Autorea</th>
                <th>Urtea</th>                
            </tr>

        <?php foreach ($edizio as $edi): ?>
            <tr>
                <td><form method="GET" action="/edizioxehetasunak"><input type= "hidden" name="zka" value="<?= $edi->Zenbakia;?>"><button type="submit"><?= $edi->Zenbakia;?></button></form>
                <td><?= $edi-> Izenburua;?></td>
                <td><?= $edi->Autorea;?></td>
                <td><?= $edi->Urtea;?></td>                
            </tr>
        

        <?php endforeach ?>
    
        </table>
    <?php else: ?>

    <h3>Ez dago deus ere.</h3>
    <p>Ez dago bat datorren elementurik</p>

    <?php endif ?>
    </div>
      
</section>

<?= $this->endSection(); ?> 


