<ul style="list-style: none;padding-left: 0;">
    <?php
    foreach ($medical as $medicals) {
        ?>
        <li>
            <span>
                <a href="{{url('medical-products/post/id/'.$medicals->id)}}">{{$medicals->title}}</a>
            </span>
        </li>
        <?php
    }
    ?>
</ul>


