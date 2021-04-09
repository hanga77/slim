<template>
    <form>
        <div class="modal-body">
            <div class="form-group">
                <input v-model="form.name" type="text" name="name" placeholder="Role Name"
                class="form-control" :class="{'is-invalid':form.errors.has('name')}">
                <has-error  :form="form" field="name"></has-error>
            </div>

            <b-form-group label="Assign Permissions">
                <b-form-checkbox v-for="option in permissions"
                    v-model="form.permission"
                    :key="option.name"
                    :value="option.name"
                     name="flavour-3a">
                    {{option.name}}
                </b-form-checkbox>
            </b-form-group>
        </div>
        <div class="modal-footer justify-content-between">
            <b-button type="submit" variant="primary" class="btn btn-primary bg-green" v-if="!dis" disabled><b-spinner small type="grow"></b-spinner></b-button>
            <button type="submit" v-if="dis" @click.prevent="CreateRole()" class="btn btn-primary gb-green"><i class="fas fa-save"></i>Save Role</button>
        </div>
    </form>
</template>

<script>
export default {
    data(){
            return {
                dis : true,
                permissions : [],
                form: new Form({
                    'name' : '',
                    'permission' : []
                })
            }
        },
    methods:{
         getPermissions() {
                    axios.get("/getPermission")
                    .then((response)=>{
                        this.permissions = response.data.permission
                    }).catch(()=>{
                        swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        })
                    });
                },
                CreateRole(){
                    this.dis = false;
                    this.form.post("/postRole").then(()=>{
                        swal.fire({
                            icon: 'success',
                            title: 'Role  Created',
                            text: 'Your Role is already existe!',
                            
                        }).catch(()=>{
                            swal.fire({
                            icon: 'error',
                            title: 'Role fail Created',
                            text: 'Your Role already existe!',
                            })
                        });
                    });
                    this.dis = true;
                }
    },
    created(){
                this.getPermissions();
    }
} 
    
</script>

<style>

</style>
