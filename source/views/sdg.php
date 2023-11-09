<div class="sdg" id="sdg<?=$row['id']?>" style="background: <?=$row[' color']?>">
    <a href="/detail.php?id=<?php echo $row['id'] ?>">
        <img class="sdg-img" src="<?=$row['img']?>"></img>
    </a>
</div>

<div class="modal" id="modal-sdg<?=$row['id']?>">

    
    <div>
        <img class="sdg-img" src="<?=$row['img']?>"></img>
    </div>
    <ul>
    <h2><?=$row["title"]?></h2>
    <p><?=$row["about"]?><p>
    <div class=button>
        <button  class="buttonsdg" type="button" id="backbtn" onclick='window.location.reload()'>
        Back!
        </button>
    </div>
</div></ul>