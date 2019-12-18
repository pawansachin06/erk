<ul style="list-style: none;padding-left: 0;">
    <li class="text-center list-header"><span>目录</span></li>
        <?php
        foreach ($category as $cat) {
            ?>
        <li>
            <span>
                <a href="{{url('other/category/id/'.$cat->id)}}">{{$cat->name}}</a>
            </span>
        </li>
        <?php
    }
    ?>
</ul>


