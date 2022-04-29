<?php 
require "config/db.php";
define('PAGE_SIZE',3);

function countAll($Table,$INNER_JOIN="")
{
    global $connect;
    $sql = "SELECT count(*) AS sodong FROM ".$Table." ".$INNER_JOIN;
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();
    return  $row['sodong'];
}

function Page (int $TotalProduct, int $CurrentPage)
{
    $LimitPage = 5; // 5 sản phẩm 2 trang

    $PagedHTML = ''; // khởi tạo

    $CurrentQuery = $_GET; //query hiện tại

    $NextQuery = $_GET; //next query
    $PrevQuery = $_GET; // query trước

    $LastQuery = $_GET; // query trước đây
    $FirstQuery = $_GET; // query đầu tiên

    $IsLastButtonHidden = '';
    $IsNextButtonHidden = '';

    $IsFirstButtonHidden = '';
    $IsPreviousButtonHidden = '';

    $TotalPage = ceil($TotalProduct / PAGE_SIZE); // tổng số page

    if($CurrentPage === 1)
    {
        $IsFirstButtonHidden = 'hidden';
        $IsPreviousButtonHidden = 'hidden';
    }
    // nếu page == 1 thì không cho quay về trang trước

    if ((int) $CurrentPage === (int) $TotalPage)
    {
        $IsLastButtonHidden = 'hidden';
        $IsNextButtonHidden = 'hidden';
    }
    // nếu tổng số page hiện tại == current page thì không có tiếp tục

    $NextQuery['Page'] = $CurrentPage + 1;     //tạo ra query tiếp theo
    $LastQuery['Page'] = $TotalPage; // tạo ra query cuối



    $NextButton = '<li class="'.$IsNextButtonHidden.' page-item"><a class="page-link" href="?'.http_build_query($NextQuery).'">></a></li>';
    $LastButton = '<li class="'.$IsLastButtonHidden.' page-item"><a class="page-link" href="?'.http_build_query($LastQuery).'">>|</a></li>';

    $PrevQuery['Page'] = $CurrentPage - 1; //trở về trang trước
    $FirstQuery['Page'] = 1; // trở về trang 1

    $PreviousButton = '<li class="'.$IsFirstButtonHidden.' page-item"><a class="page-link" href="?'.http_build_query($PrevQuery).'"><</a></li>';
    $FirstButton = '<li class="'.$IsPreviousButtonHidden.' page-item"><a class="page-link" href="?'.http_build_query($FirstQuery).'">|<</a></li>';
    // trở về trang trước
    // trở về trang đâu
    $PagedHTML .= $FirstButton.$PreviousButton;
    //tạo html
    if ($CurrentPage <= $TotalPage && $TotalPage >= 1) // nếu page hiện tại nhỏ hơn hoặc bằng tổng số page và và tổng số page >=1
    {
        $PageBreak = 1; // break page

        if ($CurrentPage > ($LimitPage / 2)) // nếu page hiện tại lớn hon 5/2 
        {
            $CurrentQuery['Page'] = 1; // page hiện tại bằng 1 

            $PagedHTML .= '<li class="page-item"><a class="page-link" href="?'.http_build_query($CurrentQuery).'">1</a></li>'; // trang đầu
            $PagedHTML .= '<li class="page-item"><a class="page-link">...</a></li>'; // đến ....
        }

        $Loop = $CurrentPage; // lặp = page hiện tại
       
        while ($Loop <= $TotalPage) // curren page => tổng số page
        {
            if ($PageBreak < $LimitPage) // nếu pagebreak ++ nếu pagebreak < 5 (limit page)
            {
                $CurrentQuery['Page'] = $Loop; // gán lại cho current query

                if ($CurrentPage === $Loop) // nếu currentpage == loop
                {
                    $PagedHTML .= '<li class="active page-item"><a class="page-link" href="?'.http_build_query($CurrentQuery).'">'.$Loop.'</a></li>';
                } else $PagedHTML .= '<li class="page-item"><a class="page-link" href="?'.http_build_query($CurrentQuery).'">'.$Loop.'</a></li>';
            }

            $PageBreak++;
            $Loop++;
        }

        if ($CurrentPage < ($TotalPage - ($LimitPage / 2))) 
        {
            $CurrentQuery['Page'] = $TotalPage;

            $PagedHTML .= '<li class="page-item"><a class="page-link"  href="?'.http_build_query($CurrentQuery).'">...</a></li>';
            $PagedHTML .= '<li class="page-item"><a class="page-link" href="?'.http_build_query($CurrentQuery).'">'.$TotalPage.'</a></li>';
        }
    }

    return $PagedHTML.$NextButton.$LastButton;
}
function GetList($CurrentPage,$Table,$GroupBy,$INNER_JOIN=""){
    global $connect;
    $sql = "SELECT * FROM ".$Table;
    if ($CurrentPage !== 0)
    {
        $sql .= " ".$INNER_JOIN;
        $sql .= " GROUP BY ".$GroupBy." LIMIT ".($CurrentPage - 1) * PAGE_SIZE.", ".PAGE_SIZE;
    }
    $result = mysqli_query($connect, $sql) or die( mysqli_error($connect));
    return mysqli_fetch_all($result);
}
?>
