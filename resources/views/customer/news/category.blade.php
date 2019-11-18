<ul style="list-style: none;padding-left: 0;">
    <?php
    foreach ($category as $cat) {
        ?>
        <li>
            <span>
                <a href="{{url('news/category/id/'.$cat->id)}}">{{$cat->name}}</a>
            </span>
        </li>
        <?php
    }
    ?>
</ul>