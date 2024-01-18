<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Book System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @layer components {
            .category-list-box {
                display: flex;
                flex-direction: row;
                align-items: center;
                gap: 1rem;
                position: relative;
                padding: 0.5rem;
                margin-right: 0.5rem;
                border-top-right-radius: 0.5rem;
                border-bottom-right-radius: 0.5rem;
            }
            /*.category-list-box-focus {*/
            /*    background-color: rgba(196, 196, 196, 0.29);*/
            /*}*/
            .category-list-text {
                font-size: 1.25rem;
                line-height: 1.75rem;
            }
        }
    </style>
</head>
<?php include './sources/templates/alerts.php'; ?>
<?php
if(isset($_SESSION['user_id'])){
    header("Location: index.php");
}
?>
<body class="min-h-[100vh] w-screen overflow-hidden font-extralight flex flex-col justify-center items-center bg-gray-900">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <svg class="mx-auto h-14 w-14" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M40.6049 20.9071V25.4488L42.5966 25.4488V18.1136C42.5966 18.0807 42.5966 18.0479 42.5967 18.015L42.5968 17.9488C42.5977 17.5565 42.5986 17.1661 42.5549 16.7758C42.4842 16.3356 42.3669 15.9059 42.2029 15.49C42.055 15.1569 41.8785 14.8372 41.6737 14.5355C41.6189 14.4506 41.561 14.3687 41.5001 14.2899C41.4859 14.2712 41.4764 14.2579 41.4703 14.2489L41.4688 14.2474C41.4593 14.2379 41.451 14.2296 41.4453 14.2232C41.3234 14.0746 41.1925 13.9321 41.0554 13.7956C40.9202 13.661 40.7791 13.5353 40.6321 13.4126C40.6189 13.4004 40.583 13.3702 40.5589 13.3529L40.545 13.3426L40.5312 13.3324L40.5233 13.3259L40.5293 13.331C40.4532 13.2752 40.3751 13.2216 40.297 13.1679C40 12.9718 39.6879 12.8008 39.3629 12.6572C38.9444 12.4941 38.5082 12.3743 38.0627 12.3029C37.5823 12.2494 37.0999 12.2494 36.6219 12.3029C36.1802 12.3733 35.7489 12.4901 35.3315 12.6532C34.997 12.8005 34.6758 12.9761 34.3728 13.18C34.2875 13.2346 34.2052 13.2922 34.126 13.3529C34.1073 13.367 34.094 13.3765 34.0849 13.3825L34.0834 13.384C34.0739 13.3934 34.0655 13.4017 34.059 13.4075C33.9098 13.5288 33.7666 13.6591 33.6296 13.7956C33.4944 13.9302 33.3681 14.0706 33.2449 14.217C33.2326 14.2302 33.2023 14.2659 33.1849 14.2899L33.1755 14.3024L33.1643 14.3174L33.1589 14.3239L33.1505 14.334L33.1629 14.3194C33.1069 14.3951 33.053 14.4729 32.9991 14.5506C32.802 14.8463 32.6303 15.157 32.4861 15.4805C32.3225 15.8966 32.2023 16.3301 32.1306 16.7728C32.0838 17.1963 32.0857 17.6214 32.0876 18.0453C32.088 18.1287 32.0884 18.2122 32.0884 18.2956V25.4462L32.1798 25.4468C32.3463 25.4478 32.5128 25.4488 32.6793 25.4488H34.0927V21.246C34.0927 20.7366 34.51 20.3576 35.0064 20.3364C35.4999 20.3151 35.9202 20.77 35.9202 21.246V25.4488L38.7774 25.4488V20.3582L37.0169 20.3582C36.5051 20.3582 36.1244 19.9397 36.1031 19.4485C36.0818 18.9573 36.5387 18.5388 37.0169 18.5388L39.6911 18.5388C40.1876 18.5388 40.6049 18.9573 40.6049 19.4485V19.4697C40.611 19.7891 40.6089 20.1085 40.6069 20.4279L40.6069 20.43C40.6059 20.589 40.6049 20.748 40.6049 20.9071ZM33.1629 14.3194L33.1643 14.3174C33.1893 14.287 33.2144 14.2552 33.2394 14.2235L33.2397 14.2232L33.2449 14.217C33.2593 14.2015 33.2487 14.2171 33.1629 14.3194ZM40.5293 13.331L40.5312 13.3324C40.5617 13.3573 40.5935 13.3821 40.6253 13.407L40.6257 13.4073L40.6259 13.4075L40.6321 13.4126C40.6477 13.427 40.632 13.4165 40.5293 13.331Z" fill="white"/>
            <path d="M32.1066 16.9341C32.11 16.9091 32.1135 16.8842 32.1172 16.8592C32.1138 16.884 32.1104 16.9089 32.1066 16.9341Z" fill="white"/>
            <path d="M34.1839 13.3074C34.1767 13.3088 34.167 13.3135 34.1562 13.3199C34.1662 13.3134 34.1757 13.3088 34.1839 13.3074Z" fill="white"/>
            <path d="M36.7057 12.2901C36.731 12.2867 36.7564 12.2832 36.782 12.2794L36.7602 12.2824C36.7483 12.284 36.7365 12.2857 36.7247 12.2874L36.7057 12.2901Z" fill="white"/>
            <path d="M37.9029 12.2794C37.9279 12.2828 37.9529 12.2863 37.9779 12.2899C37.9531 12.2866 37.9281 12.2832 37.9029 12.2794Z" fill="white"/>
            <path d="M41.5458 14.3475C41.5443 14.3404 41.5397 14.3307 41.5333 14.3201C41.5399 14.33 41.5444 14.3394 41.5458 14.3475Z" fill="white"/>
            <path d="M42.5702 16.8772L42.5676 16.8583C42.5699 16.8734 42.572 16.8886 42.5742 16.9037L42.5783 16.9341C42.5764 16.921 42.5745 16.908 42.5727 16.895L42.5702 16.8772Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9746 67.0146C8.60883 62.8663 3.80192 56.1394 1.45437 48.2913C-0.893198 40.4431 -0.669622 29.0074 4.13729 20.0381C8.94418 11.0687 17.5519 3.33275 29.4014 0.866209C41.2509 -1.60035 49.8586 1.5389 57.7957 6.02354C65.7326 10.5082 72.44 21.6076 73.8932 28.1104C75.3465 34.6131 75.57 41.5644 73.3343 49.3004C71.0985 57.0363 64.6148 64.5481 60.0314 67.9115C55.5765 71.1808 50.8047 72.8613 50.5409 72.9529C50.4426 72.4573 49.5393 67.9017 49.337 66.7973C49.2988 66.5888 49.2546 66.3576 49.208 66.1139L49.2073 66.1106L49.2063 66.1051L49.206 66.1038C48.9916 64.9834 48.7275 63.6029 48.7665 62.9584C48.8139 62.1715 49.8132 61.1187 50.1698 60.761C50.5265 60.4034 52.0481 58.4004 52.3808 57.7805C52.6942 57.1964 52.5016 56.0204 52.3392 55.0289L52.339 55.0277C52.329 54.9669 52.3192 54.9068 52.3096 54.8475C52.2409 54.4248 52.14 53.9534 52.025 53.4167L52.0249 53.4161C51.8611 52.6512 51.6688 51.7535 51.5011 50.6748C51.2158 48.8389 51.1682 47.5479 51.2633 47.3334C51.3584 47.1187 51.3584 45.7358 51.3584 45.545C51.3584 45.3543 51.2633 45.1637 50.6452 45.0443C50.0271 44.9251 49.5041 45.1158 49.0286 45.6882C48.5771 46.2315 48.5966 47.1006 48.6201 48.1462L48.6238 48.3148C48.6462 49.3673 48.7734 50.2306 48.8872 51.0033L48.9091 51.1522C48.9518 51.4425 49.0035 51.6687 49.0458 51.8535C49.1216 52.1849 49.1672 52.3839 49.0756 52.5829C48.9745 52.8027 48.5625 53.0226 47.9752 53.3359L47.9746 53.3363C47.7339 53.4647 47.4638 53.6088 47.1737 53.775C46.1751 54.3473 45.2716 55.0388 44.82 55.778C44.3737 56.5082 44.4378 57.7297 44.5082 59.0694L44.5108 59.119C44.5823 60.4782 44.9863 62.4572 44.9863 62.4572L44.4871 62.5526C44.4871 62.5526 43.9404 60.1888 43.7741 58.3289C43.6077 56.4692 43.893 55.7777 44.2733 55.2293C44.6538 54.6809 45.1531 54.1801 46.2941 53.5362C46.6095 53.3583 46.894 53.206 47.1441 53.072L47.1452 53.0714L47.1466 53.0707C47.8001 52.7207 48.2185 52.4966 48.3388 52.2726C48.4289 52.1049 48.3235 51.3154 48.2003 50.3919C48.0957 49.6083 47.9783 48.7281 47.9564 48.0495C47.909 46.5712 48.2655 45.9035 48.2655 45.9035C48.2655 45.9035 47.6949 43.8529 47.4334 42.8991C47.1719 41.9454 46.7202 40.5387 46.4111 39.7518C46.1021 38.965 45.7454 38.965 45.2462 38.965C44.747 38.965 44.224 39.2032 44.1762 39.9663C44.1391 40.5628 44.4797 41.9464 44.8233 43.3422C44.9192 43.7317 45.0153 44.1222 45.1036 44.4968C45.5077 46.2136 46.1496 48.9794 46.1496 48.9794L44.628 49.3849C44.628 49.3849 44.5805 49.361 44.628 49.1702C44.6535 49.0678 44.8297 48.9654 45.0059 48.863C45.1579 48.7746 45.31 48.6862 45.3651 48.5979C45.4763 48.4193 45.171 47.2171 44.839 45.9101C44.8164 45.8208 44.7936 45.7311 44.7708 45.6412C44.4141 44.2345 44.1524 43.233 43.7246 41.8023C43.2967 40.3716 43.1064 39.7518 42.8211 39.2987C42.5358 38.8456 42.0128 38.8933 41.5373 39.0364C41.0619 39.1795 40.729 39.3701 40.9192 40.6102C41.1095 41.8501 41.8226 44.1629 41.8226 44.1629C41.8226 44.1629 42.2505 44.2582 42.6072 44.7113C42.9639 45.1642 43.3441 46.2373 43.3917 47.0004C43.4393 47.7635 43.2248 48.1003 43.2248 48.1003C43.2248 48.1003 43.8191 49.054 43.7953 49.9363C43.7717 50.8186 43.3436 51.6769 43.3436 51.6769C43.3436 51.6769 43.8429 52.9645 43.5576 54.0137C43.2723 55.0628 42.8682 55.5873 42.8682 55.5873C42.8682 55.5873 43.1773 55.7543 42.9633 57.6856C42.7493 59.617 41.0849 60.0972 40.2765 60.2165C40.279 61.2893 40.5142 66.7974 40.5142 66.7974L39.2781 66.7497C39.2781 66.7497 40.1102 75.0474 39.8011 74.9998C39.4918 74.9521 36.1852 74.6918 36.1852 74.6918C36.1827 74.1437 36.187 73.5612 36.1918 72.8992V72.8974C36.2001 71.7722 36.21 70.4174 36.1916 68.611C36.1901 68.3854 36.1911 68.1858 36.192 68.0094C36.1957 67.3048 36.1974 66.9693 36.0314 66.8139C35.8804 66.6726 35.5907 66.6803 35.0375 66.6952C34.8291 66.7008 34.5831 66.7073 34.2933 66.7073C34.2861 65.0788 34.2885 63.8754 34.2909 62.68V62.6793C34.2921 62.0845 34.2933 61.4916 34.2933 60.8494H32.249C30.6136 60.8494 28.6105 59.839 28.1725 58.1403C27.8633 60.1909 27.7207 62.6468 27.7207 62.6468C27.4615 65.3174 27.4592 65.3176 27.1582 65.3406L27.1501 65.3412C27.0303 63.9991 27.1648 62.7496 27.2369 62.0803C27.2506 61.9529 27.2621 61.8465 27.2691 61.7645C27.2691 61.7645 27.5509 60.2602 27.6969 57.2579C27.7955 55.2371 27.8981 54.8591 27.9257 54.7575C27.9311 54.7376 27.9337 54.7283 27.9327 54.7194C27.9319 54.7115 27.9284 54.7039 27.9218 54.6895C27.9117 54.6677 27.8945 54.6302 27.8686 54.5523L28.5528 54.3967C28.5528 54.6934 28.564 54.9029 28.5753 55.1149C28.5869 55.332 28.5987 55.5517 28.5987 55.8703C28.5987 58.6381 29.5879 60.1525 32.2892 60.2843C33.0192 60.3139 33.3788 60.294 33.6273 60.2803C33.8709 60.2669 34.0079 60.2593 34.2825 60.31L34.7145 46.812L33.2712 46.7906C33.2712 47.1121 33.3005 47.3672 33.3343 47.6609C33.3866 48.1165 33.4496 48.6648 33.4304 49.6976C33.379 52.4624 32.2899 53.4529 30.1932 53.4161L28.1606 53.3807L28.1487 52.9154L29.8605 52.844L29.8685 52.8437C30.056 52.8387 32.9665 52.7596 32.8322 49.9826L32.6894 47.0269C32.6716 46.6589 32.3983 46.6347 32.0806 46.6065C31.708 46.5735 31.2743 46.535 31.1202 45.9301L34.8292 46.1924C35.6014 46.2802 36.3338 46.084 36.9673 45.7831C37.7534 44.9039 39.0849 44.3316 39.0849 44.3316C39.1563 43.2586 38.1336 43.2604 37.0676 43.2759L30.0982 43.3778C27.0067 43.4231 26.232 47.0855 25.2401 59.092C24.9465 62.6472 24.8709 64.2654 24.8305 65.1282C24.8197 65.3596 24.8114 65.5366 24.8021 65.6821C24.8021 65.6838 24.7988 65.7425 24.7929 65.8491C24.7451 66.7045 24.5251 70.6456 24.4405 72.9989C24.4405 72.9989 19.3405 71.163 13.9746 67.0146ZM50.2443 34.032L24.2181 34.0504C23.8965 34.7115 26.0401 35.4366 28.5393 36.2821C31.7136 37.3558 35.4616 38.6237 35.4616 40.2011V42.8371H38.8199C38.8199 42.5274 38.8173 42.2421 38.815 41.9785C38.8033 40.6568 38.7964 39.8801 39.1314 39.3032C39.6087 38.481 40.7801 38.0643 43.6207 37.0537C45.2046 36.4901 47.3074 35.742 50.0983 34.636C50.3104 34.552 50.2443 34.032 50.2443 34.032ZM39.541 57.4899C39.541 58.3802 39.9507 66.0497 39.9507 66.0497L34.9255 66.1535L34.8774 61.2887C34.8708 60.6298 35.3048 46.7875 35.3048 46.7875C35.6495 46.8422 35.909 46.7996 36.3102 46.7339C36.4347 46.7135 36.5727 46.6909 36.7312 46.6683C36.7163 46.9212 36.8508 47.1283 36.9541 47.2875C37.0165 47.3835 37.0676 47.4621 37.0676 47.5228C37.0676 47.5855 37.0043 47.6641 36.9193 47.7695C36.7463 47.9843 36.4835 48.3104 36.4835 48.8408C36.4835 48.8408 36.3984 49.5534 36.8264 50.5073C36.5649 51.3894 36.6032 52.1342 37.0401 53.0108C36.8024 53.5115 37.0676 54.2593 37.0676 54.2593C37.1883 54.5456 37.3337 54.6377 37.6146 54.8155C37.9335 55.0175 38.4272 55.33 39.2578 56.1631C39.2578 56.1631 39.541 56.5997 39.541 57.4899ZM40.9908 44.7376C42.1125 44.7376 42.344 45.4741 42.5355 46.0834C42.6033 46.299 42.666 46.4986 42.7614 46.644L42.7026 47.5511C41.9924 47.2982 41.8001 47.0831 41.6595 46.9258C41.4908 46.7371 41.3965 46.6316 40.5712 46.644C39.739 46.6566 38.2119 47.0328 37.6861 47.3843C37.3269 47.0431 37.3625 46.7356 37.3889 46.5066C37.3951 46.4529 37.4008 46.4035 37.4008 46.3591C37.4008 45.5535 39.2969 44.7376 40.9908 44.7376ZM43.1995 49.8659C43.1995 48.6503 41.7462 47.3365 40.7532 47.3365C40.1253 47.3365 37.1156 47.6633 37.1156 48.791C37.1156 49.0692 37.1632 49.4586 37.5049 50.0123C37.7823 49.9243 40.1186 49.573 40.1332 49.573C41.4182 49.573 42.4111 50.3638 42.7615 50.8909C42.7615 50.8909 43.1995 50.1734 43.1995 49.8659ZM40.7058 50.3646C41.7125 50.3963 43.0593 51.6968 43.0593 52.8684C43.0593 53.6151 42.8638 54.1568 42.4696 54.5521C42.236 53.8784 40.9073 52.0626 38.5271 52.0626C38.4253 52.0626 38.3047 52.1325 38.173 52.2088C37.9647 52.3296 37.7288 52.4664 37.4961 52.3676C37.1157 52.0339 37.2823 51.2708 37.2823 51.2708C37.2823 50.2554 38.5049 50.295 39.1394 50.3156L40.7058 50.3646ZM42.4694 56.7488C42.4694 55.7968 41.1621 52.4963 38.4945 52.6537C37.6862 52.7013 37.5437 53.5016 37.5437 53.7505C37.5437 54.0997 38.0445 54.4619 38.6063 54.8681C39.2931 55.3647 40.0708 55.927 40.135 56.6118C40.1902 57.1809 40.2061 57.7811 40.2205 58.3259C40.2327 58.7903 40.2439 59.2145 40.2775 59.5448C41.5626 59.3542 42.4694 58.4621 42.4694 56.7488ZM39.7068 40.7161C39.9394 40.6642 40.3521 40.9876 40.4251 41.4013C40.4352 41.4586 41.0457 43.6418 41.1435 43.9846C41.1613 44.0472 40.8772 44.0936 40.4251 44.1252C40.0501 44.1512 39.8896 44.1755 39.8097 44.1875C39.7762 44.1926 39.7568 44.1955 39.7418 44.1955C39.6385 44.1955 39.5841 43.9477 39.5841 43.6683C39.5841 43.6116 39.5539 43.5504 39.5174 43.4763C39.4601 43.36 39.3871 43.2121 39.3914 43.0006C39.3948 42.8213 39.393 42.3999 39.3919 42.1268C39.3912 41.9824 39.3908 41.8795 39.3914 41.8758V40.7863C39.4089 40.7424 39.7068 40.7161 39.7068 40.7161ZM38.2623 5.12272V8.2824C38.2623 8.79183 37.845 9.17087 37.3485 9.19209C36.8551 9.21332 36.4348 8.75847 36.4348 8.2824L36.4348 5.12272C36.4348 4.61329 36.852 4.23425 37.3485 4.21302C37.842 4.1918 38.2623 4.64664 38.2623 5.12272ZM31.1175 8.50301L31.1184 8.50422L31.1213 8.50785L31.1222 8.50906L31.1232 8.51027C31.3949 8.85697 31.6667 9.20367 31.9393 9.55036C32.0946 9.7505 32.1951 9.93547 32.2073 10.1932C32.2165 10.4358 32.0977 10.6632 31.9393 10.8361C31.7839 11.0028 31.5189 11.1029 31.2936 11.1029C31.0895 11.1029 30.7818 11.0059 30.6478 10.8361L30.4103 10.5359C30.1372 10.1886 29.8649 9.84123 29.5927 9.49392L29.5893 9.48957C29.3159 9.1409 29.0426 8.79223 28.7685 8.44357C28.6101 8.24344 28.5127 8.05846 28.5005 7.80072C28.4914 7.55813 28.6101 7.33071 28.7685 7.15786C28.9239 6.99109 29.1889 6.89102 29.4143 6.89102C29.6183 6.89102 29.926 6.98805 30.06 7.15786L30.2976 7.45807C30.5714 7.80638 30.8444 8.15469 31.1175 8.50301ZM44.8738 9.79004C44.6003 10.1389 44.3269 10.4877 44.0527 10.8365C43.9065 11.0215 43.6293 11.0912 43.4069 11.1033C43.1633 11.1124 42.9348 10.9942 42.7612 10.8365C42.5937 10.6819 42.4932 10.418 42.4932 10.1936C42.4932 9.92984 42.6059 9.7479 42.7612 9.5508L42.9988 9.2506C43.2718 8.90336 43.544 8.55612 43.8162 8.20889L43.82 8.20398L43.8239 8.19897C44.0959 7.85208 44.3678 7.50519 44.6405 7.1583C44.7867 6.97332 45.0608 6.90055 45.2862 6.89145C45.5299 6.88235 45.7584 7.00061 45.932 7.15829C46.0995 7.31294 46.2 7.57676 46.2 7.80115C46.2 8.06496 46.0873 8.2469 45.932 8.444L45.6944 8.7442C45.4203 9.09281 45.1471 9.44143 44.8738 9.79004ZM29.673 25.4489C29.8636 25.4452 30.0545 25.4438 30.2456 25.4436V19.6237C30.2456 19.3893 30.2453 19.1545 30.2449 18.9196L30.2449 18.9169L30.2449 18.9164C30.2443 18.4445 30.2436 17.9721 30.2456 17.5011C30.2517 15.5756 31.0589 13.6895 32.4721 12.3704C33.9372 11.0028 35.984 10.2569 37.9943 10.4722C39.036 10.5844 40.0381 10.8876 40.9427 11.4243C41.829 11.9519 42.5753 12.6645 43.1692 13.5015C44.0403 14.7296 44.4241 16.2002 44.4241 17.6921L44.4241 25.4489L45.0455 25.4489C45.5572 25.4489 45.938 25.8644 45.9593 26.3586C45.9806 26.8499 45.5237 27.2683 45.0455 27.2683H45.0212C44.6091 27.2764 44.1958 27.2737 43.782 27.271C43.6684 27.2703 43.5546 27.2695 43.441 27.269C43.124 27.2741 42.807 27.2721 42.4899 27.2702C42.3574 27.2694 42.2249 27.2686 42.0924 27.2683H40.6049V31.2837C40.6049 31.7931 40.1876 32.1721 39.6911 32.1934C39.1977 32.2146 38.7774 31.7597 38.7774 31.2837V31.2624C38.7713 30.943 38.7733 30.6237 38.7753 30.3043L38.7753 30.3021C38.7764 30.1431 38.7774 29.9841 38.7774 29.8251V27.2683L35.9202 27.2683V31.283C35.9202 31.7925 35.5029 32.1685 35.0064 32.1927C34.513 32.214 34.0927 31.7591 34.0927 31.283L34.0927 27.2683L31.1566 27.2683C31.1464 27.2687 31.1362 27.2689 31.1261 27.2689C31.1159 27.2689 31.1057 27.2687 31.0956 27.2683L29.6487 27.2683C29.137 27.2683 28.7562 26.8529 28.7349 26.3586C28.7136 25.8674 29.1705 25.4489 29.6487 25.4489L29.673 25.4489Z" fill="white"/>
            <path d="M50.5409 72.9529L50.5496 72.9967L50.5294 72.9569L50.5409 72.9529Z" fill="white"/>
        </svg>
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">Sign in to your account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="user/login.php" method="POST">
            <div>
                <label for="username" class="block text-sm font-medium leading-6 text-white">Username</label>
                <div class="mt-2">
                    <input id="username" name="username" type="text" required class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-white">Password</label>
                    <!--                            <div class="text-sm">-->
                    <!--                                <a href="#" class="font-semibold text-indigo-400 hover:text-indigo-300">Forgot password?</a>-->
                    <!--                            </div>-->
                </div>
                <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Sign in</button>
            </div>
        </form>

        <p class="mt-10 text-center text-sm text-gray-400">
            Not a member?
            <a href="register.php" class="font-semibold leading-6 text-indigo-400 hover:text-indigo-300">Register Here</a>
        </p>
    </div>
</div>
</body>