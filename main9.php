         <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'main';
            include('main_content.php'); // This is where you include the code snippet you provided
        ?>
 
 <main class="main-content">
<aside class="sidebar">
    <div id="navigation_inner">
        <div id="navigation_innermost">
            <div id="navigation_wrapper">
                <div data-container="navigation">
                    <div class="j-nav-variant-standard">
                        <ul id="mainNav1" class="mainNav1">
							<li><a href="?page=main10" class="level_1"><span>Тест по трехмерной графике</span></a></li>
                            <li><a href="?page=main11" class="level_1"><span>Тест по растровой графике</span></a></li>
                            <li><a href="?page=main12" class="level_1"><span>Тест по трехмерной графике</span></a></li>	
		                    <!-- Add more sidebar items as needed -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
</main> 

