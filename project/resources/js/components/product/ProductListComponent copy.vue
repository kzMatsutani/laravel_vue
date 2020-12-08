<template>
    <div class="container">
        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">商品名</th>
                    <th scope="col">価格</th>
                    <th scope="col">画像</th>
                    <th scope="col">SHOW</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="product in products">
                    <th scope="row">{{ product.id }}</th>
                    <th>{{ product.name }}</th>
                    <th>{{ product.price }}</th>
                    <th>{{ product.img1 }}</th>
                    <td>
                        <button class="btn btn-primary">Show</button>
                    </td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                    </td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data:function () {
            return {
                products: []
            }
        },
        methods: {
            getProducts() {
                axios.get('/api/admin/product')
                    .then((res) => {
                        this.products = res.data;
                    });
            }
        },
        mounted() {
            this.getProducts();
        }
    }
</script>


<main class="adm-product-list">
    <div class="container">
        <div class="list-top">
            <section class="btn">
            </section>
            <section class="product-search">
                <form action="" method="get">
                    <table>
                        <tr>
                            <th>商品名</th>
                            <td class="name"><input type="text" name="name" value=""></td>
                        </tr>
                        <tr>
                            <th>価格</th>
                            <td class="price">
                                <input type="text" name="price" value="">円 ~
                                <input type="text" name="price2" value="">円
                            </td>
                        </tr>
                        <tr>
                            <th>カテゴリー</th>
                            <td>
                                <select name="category">
                                    <option value="" ?>未選択
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="検索"></td>
                        </tr>
                    </table>
                </form>
            </section>
        </div>
        <form action="" method="get" id="form_selected_sortkey_admin">
            <span>件を表示しています。(件)</span>
            <input type="hidden" name="name" value="<?= isset($name) ? $name : ''; ?>">
            <input type="hidden" name="price1" value="<?= isset($price1) ? $price1 : ''; ?>">
            <input type="hidden" name="price2" value="<?= isset($price2) ? $price2 : ''; ?>">
            <input type="hidden" name="category" value="<?= isset($category) ? $category : ''; ?>">
            <input type="hidden" name="sub_category" value="<?= isset($sub_category) ? $sub_category : ''; ?>">
            <select name="sort_key" id="selected_sortkey_admin">
                <option value="id_DESC">IDの新しい順</option>
                <option value="id_ASC">IDの古い順</option>
                <option value="price_DESC">値段が高い順</option>
                <option value="price_ASC">値段が安い順</option>
            </select>
        </form>
        <section class="product-table">
            <table>
                <tr>
                    <td>ID</td>
                    <td>商品名</td>
                    <td>価格</td>
                    <td>画像</td>
                    <td>登録日時</td>
                    <td>更新日時</td>
                    <td><a href=""><button type="button">新規登録</button></a></td>
                </tr>
                <tr>
                    <td colspan="7">データが見つかりませんでした</td>
                </tr>
                <tr v-for="product in products">
                    <td class="nowrap">{{ product.id }}</td>
                    <td class="nowrap">{{ product.name }}</td>
                    <td class="nowrap">{{ product.price }}</td>
                    <td>{{ product.img1 }}</td>
                    <td>{{ product.created_at }}</td>
                    <td>{{ product.updated_at }}</td>
                    <td>
                        <a href=""><button type="button" id="btn">編集</button></a>
                        <form action="" method="post">
                            <button type="submit" name="delete" value="">削除</button>
                        </form>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</main>
