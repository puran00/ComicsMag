<?php $__env->startSection('title'); ?>
    Регистрация
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
    <div class="container" id="RegPage">
        <div class="row mt-5 text-center">
            <h1>Регистрация</h1>
        </div>

        <div class="row mt-3 justify-content-center">
            <div class="col-6">
                <form id="form" @submit.prevent="Registration">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Имя</label>
                        <input type="text" class="form-control" id="name" name="name" :class="errors.name ? 'is-invalid':''">
                        <div :class="errors.name ? 'invalid-feedback' : '' " v-for="error in errors.name">
                            {{ error }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Фамилия</label>
                        <input type="text" class="form-control" id="surname" name="surname" :class="errors.name ? 'is-invalid':''">
                        <div :class="errors.name ? 'invalid-feedback' : '' " v-for="error in errors.name">
                            {{ error }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Отчество</label>
                        <input type="text" class="form-control" id="patronymic" name="patronymic" :class="errors.name ? 'is-invalid':''">
                        <div :class="errors.name ? 'invalid-feedback' : '' " v-for="error in errors.name">
                            {{ error }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Логин</label>
                        <input type="text" class="form-control" id="login" name="login" :class="errors.name ? 'is-invalid':''">
                        <div :class="errors.name ? 'invalid-feedback' : '' " v-for="error in errors.name">
                            {{ error }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" :class="errors.name ? 'is-invalid':''">
                        <div :class="errors.name ? 'invalid-feedback' : '' " v-for="error in errors.name">
                            {{ error }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="password" name="password" :class="errors.name ? 'is-invalid':''">
                        <div :class="errors.name ? 'invalid-feedback' : '' " v-for="error in errors.name">
                            {{ error }}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Повторите пароль</label>
                        <input type="password" class="form-control" name="password_confirmation" :class="errors.name ? 'is-invalid':''">
                        <div :class="errors.name ? 'invalid-feedback' : '' " v-for="error in errors.name">
                            {{ error }}
                        </div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="rule" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Согласен на обработку ПД</label>
                    </div>
                    <button type="submit" class="btn btn-primary col-12" style="background-color: #93A0FF; border: none;">Регистрация</button>
                </form>
            </div>

        </div>

    </div>
    <script>
        const Registration={
            data(){
                return{
                    errors:[],
                }
            },
            methods:{
                async Registration(){
                    const form = document.querySelector('#form');
                    const form_data = new FormData(form);
                    const response = await fetch('<?php echo e(route('newUserSave')); ?>', {
                        method: 'post',
                        headers:{
                            'X-CSRF-TOKEN':'<?php echo e(csrf_token()); ?>',
                        },
                        body:form_data,
                    });
                    if(response.status===400){
                        this.errors = await response.json();
                    }
                    if(response.status===200){
                        window.location=response.url;
                    }
                }
            }
        }
        Vue.createApp(Registration).mount('#RegPage');
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\ComicsMag\resources\views/user/Registration.blade.php ENDPATH**/ ?>