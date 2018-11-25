//
//  LoginViewController.m
//  CHTC_EN
//
//  Created by macmini on 2018/5/12.
//  Copyright © 2018年 lixin. All rights reserved.
//

#import "LoginViewController.h"
#import "RegisterViewController.h"
#import "ForgetPassWordViewController.h"
#import <UMSocialCore/UMSocialCore.h>

@interface LoginViewController ()<UITextFieldDelegate>
{
    UIScrollView *mainScrollView;
    UITextField *LoginText;
    UITextField *passWordText;
    UITextField *photoText;
    NSString *randomNumber;
}
@end

@implementation LoginViewController

- (void)viewWillAppear:(BOOL)animated {
    [self.navigationController setNavigationBarHidden:YES animated:animated];
    [super viewWillAppear:animated];
}

- (void)viewWillDisappear:(BOOL)animated {
    [self.navigationController setNavigationBarHidden:NO animated:animated];
    [super viewWillDisappear:animated];
}


- (void)viewDidLoad {
    [super viewDidLoad];
    if (NSFoundationVersionNumber>=NSFoundationVersionNumber_iOS_8_0) {
        
        self.edgesForExtendedLayout = UIRectEdgeNone;
        
        self.extendedLayoutIncludesOpaqueBars = NO;
        
        self.modalPresentationCapturesStatusBarAppearance = NO;
        
        self.automaticallyAdjustsScrollViewInsets=NO;
        
    }
    self.view.backgroundColor = [UIColor whiteColor];
    mainScrollView = [[UIScrollView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H)];
    mainScrollView.userInteractionEnabled =YES;
    mainScrollView.backgroundColor = COLOR(251, 251, 253);
    [self.view addSubview:mainScrollView];
    [self createPhotoCode];
    [self GreateUI];
    
}

- (void)createPhotoCode{
    int num = (arc4random() % 10000);
    randomNumber = [NSString stringWithFormat:@"%.4d", num];
}

- (void)GreateUI{

    UIImageView *BackImageV = [[UIImageView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W ,250)];
    BackImageV.image = [UIImage imageNamed:@"login_back"];
    [mainScrollView addSubview:BackImageV];
    
    UIButton *leftBack = [UIButton buttonWithType:UIButtonTypeCustom];
    leftBack.frame = CGRectMake(8, 25, 30, 30);
    [leftBack addTarget:self action:@selector(back_action) forControlEvents:UIControlEventTouchUpInside];
    [leftBack setImage:[UIImage imageNamed:@"back"] forState:UIControlStateNormal];
    [mainScrollView addSubview:leftBack];
    
    UILabel *logoTitle = [[UILabel alloc] initWithFrame:CGRectMake(50, 30, SCREEN_W -100, 20)];
    logoTitle.textColor = UIColorFromRGBA(0xffffff, 1);
    logoTitle.text = @"登录";
    logoTitle.font = FontBold(18);
    logoTitle.textAlignment = 1;
    [BackImageV addSubview:logoTitle];
    
    UIView *firstV = [[UIView alloc] initWithFrame:CGRectMake(35, 124, SCREEN_W - 70, 392)];
    firstV.backgroundColor = [UIColor whiteColor];
    [mainScrollView addSubview:firstV];
    firstV.layer.cornerRadius = 4.5;
    firstV.layer.shadowColor =UIColorFromRGBA(0xff0404, 0.8).CGColor;
    firstV.layer.shadowOpacity = 0.15f;
    firstV.layer.shadowRadius = 8.f;
    firstV.layer.shadowOffset = CGSizeMake(0,0);
    
    UIView *SecondV = [[UIView alloc] initWithFrame:CGRectMake(25, 124, SCREEN_W - 50, 372)];
    SecondV.backgroundColor = [UIColor whiteColor];
    [mainScrollView addSubview:SecondV];
    SecondV.layer.cornerRadius = 4.5;
    SecondV.layer.shadowColor =UIColorFromRGBA(0xff0404, 0.8).CGColor;
    SecondV.layer.shadowOpacity = 0.15f;
    SecondV.layer.shadowRadius = 8.f;
    SecondV.layer.shadowOffset = CGSizeMake(0,0);

    UILabel *logoL = [[UILabel alloc] initWithFrame:CGRectMake(0, 40, SCREEN_W -50, 20)];
    logoL.textColor = UIColorFromRGBA(0x3e3e3e, 1);
    logoL.text = @"登录";
    logoL.font = FontBold(15);
    logoL.textAlignment = 1;
    [SecondV addSubview:logoL];
    
    UIView *LoginView = [[UIView alloc] initWithFrame:CGRectMake(30, CGRectGetMaxY(logoL.frame) +26, SCREEN_W -110, 35)];
    LoginView.backgroundColor = UIColorFromRGBA(0xfafafa, 1);
    LoginView.layer.cornerRadius = 6;
    [SecondV addSubview:LoginView];
    LoginView.layer.borderWidth = 1.5;
    LoginView.layer.borderColor = UIColorFromRGBA(0xf4f4f5,1).CGColor;
    
    LoginText = [[UITextField alloc] initWithFrame:CGRectMake(10, 0,SCREEN_W -120, 35)];
    LoginText.delegate = self;
    LoginText.tag = 101;
    LoginText.placeholder = @"请输入手机号码";
    LoginText.textColor = UIColorFromRGBA(0x333333, 1);
    LoginText.font = Font(15);
    [LoginText setValue:UIColorFromRGBA(0x999999, 1) forKeyPath:@"_placeholderLabel.textColor"];
    [LoginView addSubview:LoginText];
    
    UIView *PassView = [[UIView alloc] initWithFrame:CGRectMake(30, CGRectGetMaxY(LoginView.frame) +14, SCREEN_W -110, 35)];
    PassView.backgroundColor = UIColorFromRGBA(0xfafafa, 1);
    PassView.layer.cornerRadius = 8;
    [SecondV addSubview:PassView];
    PassView.layer.borderWidth = 1.5;
    PassView.layer.borderColor = UIColorFromRGBA(0xf4f4f5,1).CGColor;
    
    passWordText = [[UITextField alloc] initWithFrame:CGRectMake(10, 0,SCREEN_W -120, 35)];
    passWordText.delegate = self;
    passWordText.placeholder = @"请输入密码";
    passWordText.textColor = UIColorFromRGBA(0x333333, 1);
    passWordText.font = Font(15);
    [passWordText setValue:UIColorFromRGBA(0x999999, 1) forKeyPath:@"_placeholderLabel.textColor"];
    passWordText.secureTextEntry = YES;
    [PassView addSubview:passWordText];
    
    UIView *photoView = [[UIView alloc] initWithFrame:CGRectMake(30, CGRectGetMaxY(PassView.frame) +14, 160, 35)];
    photoView.backgroundColor = UIColorFromRGBA(0xfafafa, 1);
    photoView.layer.cornerRadius = 8;
    [SecondV addSubview:photoView];
    photoView.layer.borderWidth = 1.5;
    photoView.layer.borderColor = UIColorFromRGBA(0xf4f4f5,1).CGColor;
    
    photoText = [[UITextField alloc] initWithFrame:CGRectMake(10, 0,150, 35)];
    photoText.delegate = self;
    photoText.placeholder = @"请输入图形验证码";
    photoText.textColor = UIColorFromRGBA(0x333333, 1);
    photoText.font = Font(15);
    [photoText setValue:UIColorFromRGBA(0x999999, 1) forKeyPath:@"_placeholderLabel.textColor"];
    [photoView addSubview:photoText];
    
    UIButton *buttonPhoto = [UIButton buttonWithType:UIButtonTypeCustom];
    buttonPhoto.frame = CGRectMake(CGRectGetMaxX(photoView.frame) +8, CGRectGetMaxY(PassView.frame) +14, SCREEN_W - 160 - 118, 35);
    [buttonPhoto addTarget:self action:@selector(photoCode:) forControlEvents:UIControlEventTouchUpInside];
    [buttonPhoto sd_setImageWithURL:[NSURL URLWithString:[NSString stringWithFormat:@"https://api.cloudcpc.com/home/Login/create?id=%@",randomNumber]] forState:UIControlStateNormal placeholderImage:nil options:SDWebImageRefreshCached];
    [SecondV addSubview:buttonPhoto];
    

    UIButton *regisB = [UIButton buttonWithType:UIButtonTypeCustom];
    regisB.frame = CGRectMake(30, CGRectGetMaxY(photoView.frame) + 25, 52 , 20);
    [regisB setTitle:@"立即注册" forState:UIControlStateNormal];
    [regisB setTitleColor:UIColorFromRGBA(0xf16460, 1) forState:UIControlStateNormal];
    regisB.titleLabel.textAlignment = 0;
    regisB.titleLabel.font = Font(12);
    [regisB addTarget:self action:@selector(gototheRegiser) forControlEvents:UIControlEventTouchUpInside];
    [SecondV addSubview:regisB];
    [SecondV addSubview:buttonPhoto];
   
    UIButton *forgetB = [UIButton buttonWithType:UIButtonTypeCustom];
    forgetB.frame = CGRectMake(SCREEN_W - 90-40, CGRectGetMaxY(photoView.frame) + 25, 52 , 20);
    [forgetB setTitle:@"忘记密码" forState:UIControlStateNormal];
    [forgetB setTitleColor:UIColorFromRGBA(0xf16460, 1) forState:UIControlStateNormal];
    forgetB.titleLabel.textAlignment = 2;
    forgetB.titleLabel.font = Font(12);
    [forgetB addTarget:self action:@selector(gototheFoget) forControlEvents:UIControlEventTouchUpInside];
    [SecondV addSubview:forgetB];
    
    UIButton *sureB = [UIButton buttonWithType:UIButtonTypeCustom];
    sureB.frame = CGRectMake(30, CGRectGetMaxY(forgetB.frame) +20, SCREEN_W -110, 35);
    [sureB setTitle:@"登录" forState:UIControlStateNormal];
    [sureB setTitleColor:[UIColor whiteColor] forState:UIControlStateNormal];
    [sureB setBackgroundImage:[UIImage imageNamed:@"login_sure"] forState:UIControlStateNormal];
    sureB.titleLabel.font = Font(18);
    
    [sureB addTarget:self action:@selector(Surelogin) forControlEvents:UIControlEventTouchUpInside];
    [SecondV addSubview:sureB];
    
    // 判断该设备是否按照微信，如没有不显示登录接口
    // if ([[UMSocialManager defaultManager] isInstall:1]) {
    for (int i = 0; i <2; i++) {
        UILabel *line = [[UILabel alloc] initWithFrame:CGRectMake(40 + i*SCREEN_W/2, CGRectGetMaxY(firstV.frame) + 40, (SCREEN_W -80 - 80)/2, 1)];
        line.backgroundColor = UIColorFromRGBA(0xc2c2c2, 1);
        [mainScrollView addSubview:line];
    }
    
    UILabel *titleL = [[UILabel alloc] initWithFrame:CGRectMake(SCREEN_W/2 - 40, CGRectGetMaxY(firstV.frame) + 34, 80, 12)];
    titleL.text = @"第三方登录";
    titleL.textColor = UIColorFromRGBA(0xc2c2c2, 1);
    titleL.font = Font(12);
    titleL.textAlignment = 1;
    [mainScrollView addSubview:titleL];
    
    UIButton *wenxinB = [UIButton buttonWithType:UIButtonTypeCustom];
    wenxinB.frame = CGRectMake(SCREEN_W/2 -18, CGRectGetMaxY(titleL.frame) + 24, 36, 36);
    [wenxinB setBackgroundImage:[UIImage imageNamed:@"wx"] forState:UIControlStateNormal];
    [wenxinB addTarget:self action:@selector(wenxiLogo) forControlEvents:UIControlEventTouchUpInside];
    [mainScrollView addSubview:wenxinB];
    //    }
    
    
}

- (void)photoCode:(UIButton *)sender{
    NSLog(@"切换图片");
    [self createPhotoCode];
    [sender sd_setImageWithURL:[NSURL URLWithString:[NSString stringWithFormat:@"https://api.cloudcpc.com/home/Login/create?id=%@",randomNumber]] forState:UIControlStateNormal placeholderImage:nil options:SDWebImageRefreshCached];
}

- (void)gototheRegiser{
    
    [[UIHelper sharedSingleton] pushVC:@"RegisterViewController" vc:self parames:@{@"type":@"1"}];
    
    //    [[UIHelper sharedSingleton] pushVC:@"RegisterNextViewController" vc:self parames:nil];
}

- (void)gototheFoget{

    [[UIHelper sharedSingleton] pushVC:@"RegisterViewController" vc:self parames:@{@"type":@"2"}];
    
}

- (void)Surelogin{
    if ( LoginText.text.length ==0) {
        [self showError:@"请输入你的手机号"];
        return;
    }else if (passWordText.text.length ==0){
        [self showError:@"请输入你的密码"];
        return;
    }else if (passWordText.text.length <6){
        [self showError:@"密码需要大于六位数"];
        return;
    }else if (photoText.text.length == 0){
        [self showError:@"请输入你的图形验证码"];
        return;
    }
    [self showHUD:nil];
    WEAKSELF
    NSDictionary *biz = @{@"tel":LoginText.text,@"password":passWordText.text,@"captcha":photoText.text,@"id":randomNumber};
    [ConnectionRequestMgr POSTSessionWithUrl:login parameter:biz successBlock:^(NSDictionary *dict) {
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            ThePartySingTon *instance = [ThePartySingTon SharedInstance];
            instance.user = [UserLogin mj_objectWithKeyValues:dict[@"data"]];
            instance.isLogin = YES;
            AppDelegate *app = (AppDelegate *)[UIApplication sharedApplication].delegate;
            [app createRootViewController];
            
        }else{
            [weakSelf showError:dict[@"msg"]];
        }
    } failBlock:^(NSString *errorStr) {
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
    }];
}

- (void)wenxiLogo{
    __weak LoginViewController *ws = self;
    
    //6.1版本已经修正了getUserInfoWithPlatform，每次获得用户都需要跳转授权
    //如果不需要每次跳转，可以查看[UMSocialGlobal shareInstance].isClearCacheWhenGetUserInfo,来设置
    //[[UMSocialManager defaultManager] cancelAuthWithPlatform:self.authInfo.platform completion:^(id result, NSError *error) {
    [UMSocialGlobal shareInstance].isClearCacheWhenGetUserInfo = YES;
    [[UMSocialManager defaultManager] getUserInfoWithPlatform:1  currentViewController:self completion:^(id result, NSError *error) {
        
        NSString *message = nil;
        
        if (error) {
            message = [NSString stringWithFormat:@"Get info fail:\n%@", error];
            UMSocialLogInfo(@"Get info fail with error %@",error);
        }else{
            if ([result isKindOfClass:[UMSocialUserInfoResponse class]]) {
                
                UMSocialUserInfoResponse *resp = result;
                message = [ws authInfoString:resp];
                NSLog(@"%@",message);
                
                WEAKSELF
                //                [weakSelf showHUD:nil];
                //                NSString *para = formatString(@"&unionid=%@&nickname=%@&iconurl=%@",resp.unionId,resp.name,resp.iconurl);
                //                NSLog(@"%@",para);
                //                [ConnectionRequestMgr PostSessionWithUrl:@"appweixinlogin" parameter:para successBlock:^(NSDictionary *dict) {
                //                    [weakSelf hideHUD];
                //                    if ([dict[@"code"] isEqualToString:@"0000"]) {
                //
                //                    }else{
                ////                        [weakSelf showError:[NSString isCodeMessage:dict[@"code"]]];
                //                    }
                //                } failBlock:^(NSString *errorStr) {
                //                    [weakSelf hideHUD];
                //                    [weakSelf showError:errorStr];
                //                }];
                //
                //
            }else{
                message = @"Get info fail";
            }
        }
        
    }];
}

- (NSString *)authInfoString:(UMSocialUserInfoResponse *)resp
{
    NSMutableString *string = [NSMutableString new];
    if (resp.uid) {
        [string appendFormat:@"uid = %@\n", resp.uid];
    }
    if (resp.openid) {
        [string appendFormat:@"openid = %@\n", resp.openid];
    }
    if (resp.unionId) {
        [string appendFormat:@"unionId = %@\n", resp.unionId];
    }
    if (resp.usid) {
        [string appendFormat:@"usid = %@\n", resp.usid];
    }
    if (resp.accessToken) {
        [string appendFormat:@"accessToken = %@\n", resp.accessToken];
    }
    if (resp.refreshToken) {
        [string appendFormat:@"refreshToken = %@\n", resp.refreshToken];
    }
    if (resp.expiration) {
        [string appendFormat:@"expiration = %@\n", resp.expiration];
    }
    if (resp.name) {
        [string appendFormat:@"name = %@\n", resp.name];
    }
    if (resp.iconurl) {
        [string appendFormat:@"iconurl = %@\n", resp.iconurl];
    }
    if (resp.unionGender) {
        [string appendFormat:@"gender = %@\n", resp.unionGender];
    }
    return string;
}



#pragma textField
- (BOOL)textField:(UITextField *)textField shouldChangeCharactersInRange:(NSRange)range replacementString:(NSString *)string{
    if (textField.tag == 101) {
        if (range.location>=11){
            return NO;
        }
        return YES;
    }else{
        return YES;
    }
}

- (void)back_action{
    [self.navigationController popViewControllerAnimated:YES];
}
- (void)didReceiveMemoryWarning {
    [super didReceiveMemoryWarning];
    // Dispose of any resources that can be recreated.
}

/*
 #pragma mark - Navigation
 
 // In a storyboard-based application, you will often want to do a little preparation before navigation
 - (void)prepareForSegue:(UIStoryboardSegue *)segue sender:(id)sender {
 // Get the new view controller using [segue destinationViewController].
 // Pass the selected object to the new view controller.
 }
 */

@end

