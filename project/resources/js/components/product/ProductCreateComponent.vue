<template>
<main class="adm-edit-item">
    <div class="container">
        <section class="item-edit">
            <section class="btn">
            </section>
            <form v-on:submit.prevent="submit">
                <table>
                    <tr>
                        <th>商品名</th>
                        <td><input type="text" name="name" id="name" v-model="product.name"></td>
                    </tr>
                    <tr>
                        <th>価格</th>
                        <td><input type="text" name="price" id="price" v-model="product.price"></td>
                    </tr>
                    <tr>
                        <th>在庫数</th>
                        <td><input type="text" name="qty" id="qty" v-model="product.qty"></td>
                    </tr>
                    <tr>
                        <th>カテゴリー</th>
                        <td><input type="text" name="category_id" id="category_id" v-model="product.category_id"></td>
                    </tr>
                    <tr>
                        <th>説明文</th>
                        <td><textarea name="description" id="description" v-model="product.description"></textarea></td>
                    </tr>
                </table>
                <p><input type="submit" name="edit" value="決定"></p>
            </form>
        </section>
        <section class="img-edit">
            <table>
                <tr>
                    <th colspan="5">商品画像</th>
                </tr>
                <tr>
                    <td>画像1</td>
                    <td>画像2</td>
                    <td>画像3</td>
                    <td>画像4</td>
                    <td>画像5</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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
                product: {}
            }
        },
        methods: {
            submit() {
                axios.post('/api/admin/product', this.product)
                    .then((res) => {
                        this.$router.push({name: 'product.list'});
                    });
            }
        }
    }
</script>
