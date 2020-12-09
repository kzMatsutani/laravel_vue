<template>
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
                            <td colspan="2"><input type="submit" value="検索"></td>
                        </tr>
                    </table>
                </form>
            </section>
        </div>
        <form action="" method="get" id="form_selected_sortkey_admin">
            <span>件を表示しています。(件)</span>
            <input type="hidden" name="name" value="">
            <input type="hidden" name="price1" value="">
            <input type="hidden" name="price2" value="">
            <input type="hidden" name="category" value="">
            <input type="hidden" name="sub_category" value="">
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
                    <td>
                        <router-link v-bind:to="{name: 'product.create'}">
                            <button type="button">新規登録</button>
                        </router-link>
                    </td>
                </tr>
                <tr v-for="product in products">
                    <td class="nowrap">{{ product.id }}</td>
                    <td class="nowrap">{{ product.name }}</td>
                    <td class="nowrap">{{ product.price }}</td>
                    <td>{{ product.img1 }}</td>
                    <td>{{ product.created_at }}</td>
                    <td>{{ product.updated_at }}</td>
                    <td>
                        <router-link v-bind:to="{name: 'product.edit', params: {productId: product.id}}">
                            <button type="button">編集</button>
                        </router-link>
                        <button v-on:click="deleteProduct(product.id)">削除</button>
                    </td>
                </tr>
            </table>
        </section>
    </div>
</main>

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
            },
            deleteProduct(id) {
                axios.delete('/api/admin/product/' + id)
                    .then((res) => {
                        this.getProducts();
                    });
            }
        },
        mounted() {
            this.getProducts();
        }
    }
</script>
