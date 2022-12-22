<?php
     include_once "./include/header.php"
?>
<div id="adminpage">
    <h2>상품등록</h2>
    <form action="./process/productwrite_process.php" method="post" enctype="multipart/form-data">
        <table class="admin">
            <tr>
                <td>상품명</td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>
            <tr>
                <td>브랜드</td>
                <td>
                    <textarea name="brand"></textarea>
                </td>
            </tr>
            <tr>
                <td>가격</td>
                <td>
                    <input type="text" name="price">
                </td>
            </tr>
            <tr>
                <td>상품소개</td>
                <td>
                    <textarea name="brief"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="file" name="imageurl">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">등록</button>
                    <button type="취소">취소</button>
                </td>
            </tr>
        </table>
    </form>
</div>
<?php
     include_once "./include/footer.php"
?>