
<div class="sdg" id="sdg<?=$row['id']?>" style="background: <?=$row[' color']?>">
    <a href="/detail.php?id=<?php echo $row['id'] ?>">
        <img class="sdg-img" src="<?=$row['img']?>"></img>
    </a>
</div>

<div class="modal" id="modal-sdg<?=$row['id']?>">
    <button type="button" id="backbtn">
        Back!
    </button>
    
    <div>
        <img class="sdg-img" src="<?=$row['img']?>"></img>
    </div>
    <h2><?=$row["title"]?></h2>
    <p><?=$row["about"]?><p>
</div>