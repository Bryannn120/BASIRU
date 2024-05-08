
<?php $__env->startSection('pageTitle', isset($pageTitle) ? $pageTitle : 'Admin Login'); ?>
<?php $__env->startSection('content'); ?>
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
								<h2 class="text-center text-primary">Login To Basiru</h2>
							</div>
							<form action="<?php echo e(route('admin.login_handler')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php if(Session::get('fail')): ?>
                            <div class="alert alert-danger">
                                <?php echo e(Session::get('fail')); ?>

                                
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php endif; ?>

								
								<div class="input-group custom">
									<input type="text" class="form-control form-control-lg" placeholder="Email/Username"
                                        name= "login_id" value="<?php echo e(old('login_id')); ?>">
									<div class="input-group-append custom">
										<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
									</div>
								</div>

								<?php $__errorArgs = ['login_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="d-block text-danger" style="margin-top: -25px;margin-bottom: 15px;">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

								<div class="input-group custom">
									<input type="password" class="form-control form-control-lg" placeholder="Password" name="password">
									<div class="input-group-append custom">
										<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
									</div>
								</div>
								<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<div class="d-block text-danger" style="margin-top: -25px; margin-bottom:15px;">
									<?php echo e($message); ?>

								</div>
								<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								<div class="row pb-30">
									<div class="col-6">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="customCheck1">
											<label class="custom-control-label" for="customCheck1">Remember</label>
										</div>
									</div>
									<div class="col-6">
										<div class="forgot-password">
											<a href="<?php echo e(route('admin.forgot_password')); ?>">Forgot Password</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group mb-0">
										
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
									
											<!-- <a class="btn btn-primary btn-lg btn-block" href="index.html">Sign In</a> -->
										</div>
										<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373" style="color: rgb(112, 115, 115);">
											OR
										</div>
										<div class="input-group mb-0">
											<a class="btn btn-outline-primary btn-lg btn-block" href="register.blade.php">Register To Create Account</a>
										</div>
									</div>
								</div>
							</form>
						</div>
					
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.layout.auth-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\bryan\resources\views/back/pages/admin/auth/login.blade.php ENDPATH**/ ?>