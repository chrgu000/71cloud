//
//  RegisterViewController.m
//  CHTC_EN
//
//  Created by macmini on 2018/5/14.
//  Copyright © 2018年 lixin. All rights reserved.
//

#import "RegisterViewController.h"
#import "RegisterNextViewController.h"
#import "ForgetPassWordViewController.h"
@interface RegisterViewController ()<UITextFieldDelegate>
{
    UIScrollView *mainScrollView;
    UITextField *PhoneText;
    UITextField *passOne;
    UITextField *passTwo;
    UITextField *CodeText;
    UITextField *photoText;
    NSTimer *timer;
    int a;
    NSString *content;
    UIButton *codeB;
    NSString *randomNumber;
}

@end

@implementation RegisterViewController

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
    // Do any additional setup after loading the view.
    if (NSFoundationVersionNumber>=NSFoundationVersionNumber_iOS_8_0) {
        
        self.edgesForExtendedLayout = UIRectEdgeNone;
        
        self.extendedLayoutIncludesOpaqueBars = NO;
        
        self.modalPresentationCapturesStatusBarAppearance = NO;
        
        self.automaticallyAdjustsScrollViewInsets=NO;
        
    }
    a = 120;
    self.view.backgroundColor = [UIColor whiteColor];
    mainScrollView = [[UIScrollView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H)];
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
    logoTitle.text = @"手机号录入";
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
    logoL.text = @"手机号验证";
    logoL.font = FontBold(15);
    logoL.textAlignment = 1;
    [SecondV addSubview:logoL];
    
    
    UIView *LoginView = [[UIView alloc] initWithFrame:CGRectMake(30, CGRectGetMaxY(logoL.frame) +26, SCREEN_W -110, 35)];
    LoginView.backgroundColor = UIColorFromRGBA(0xfafafa, 1);
    LoginView.layer.cornerRadius = 8;
    [SecondV addSubview:LoginView];
    LoginView.layer.borderWidth = 1.5;
    LoginView.layer.borderColor = UIColorFromRGBA(0xf4f4f5,1).CGColor;
    
    PhoneText = [[UITextField alloc] initWithFrame:CGRectMake(10, 0,SCREEN_W -120, 30)];
    PhoneText.delegate = self;
    PhoneText.tag = 101;
    PhoneText.placeholder = @"请输入手机号码";
    PhoneText.textColor = UIColorFromRGBA(0x333333, 1);
    PhoneText.font = Font(15);
    [PhoneText setValue:UIColorFromRGBA(0x999999, 1) forKeyPath:@"_placeholderLabel.textColor"];
    [LoginView addSubview:PhoneText];
    ThePartySingTon *instance = [ThePartySingTon SharedInstance];
    if (instance.isLogin) {
        PhoneText.text = instance.user.tel;
        
    }else{
        
    }
    
    
    
    UIView *photoView = [[UIView alloc] initWithFrame:CGRectMake(30, CGRectGetMaxY(LoginView.frame) +14, 150, 35)];
    photoView.backgroundColor = UIColorFromRGBA(0xfafafa, 1);
    photoView.layer.cornerRadius = 8;
    [SecondV addSubview:photoView];
    photoView.layer.borderWidth = 1.5;
    photoView.layer.borderColor = UIColorFromRGBA(0xf4f4f5,1).CGColor;
    
    photoText = [[UITextField alloc] initWithFrame:CGRectMake(10, 0,140, 35)];
    photoText.delegate = self;
    photoText.placeholder = @"请输入图形验证码";
    photoText.textColor = UIColorFromRGBA(0x333333, 1);
    photoText.font = Font(15);
    [photoText setValue:UIColorFromRGBA(0x999999, 1) forKeyPath:@"_placeholderLabel.textColor"];
    [photoView addSubview:photoText];
    
    UIButton *buttonPhoto = [UIButton buttonWithType:UIButtonTypeCustom];
    buttonPhoto.frame = CGRectMake(CGRectGetMaxX(photoView.frame) +8, CGRectGetMaxY(LoginView.frame) +14, SCREEN_W -150 - 8-110, 35);
    [buttonPhoto addTarget:self action:@selector(photoCode:) forControlEvents:UIControlEventTouchUpInside];
    [buttonPhoto sd_setImageWithURL:[NSURL URLWithString:[NSString stringWithFormat:@"https://api.cloudcpc.com/home/Login/create?id=%@",randomNumber]] forState:UIControlStateNormal placeholderImage:nil options:SDWebImageRefreshCached];
    [SecondV addSubview:buttonPhoto];
    
    UIView *PassView = [[UIView alloc] initWithFrame:CGRectMake(30, CGRectGetMaxY(photoView.frame) +14, 150, 35)];
    PassView.backgroundColor = UIColorFromRGBA(0xfafafa, 1);
    PassView.layer.cornerRadius = 8;
    [SecondV addSubview:PassView];
    PassView.layer.borderWidth = 1.5;
    PassView.layer.borderColor = UIColorFromRGBA(0xf4f4f5,1).CGColor;
    
    CodeText = [[UITextField alloc] initWithFrame:CGRectMake(10, 0,140, 35)];
    CodeText.delegate = self;
    CodeText.placeholder = @"请输入验证码";
    CodeText.textColor = UIColorFromRGBA(0x333333, 1);
    CodeText.font = Font(15);
    [CodeText setValue:UIColorFromRGBA(0x999999, 1) forKeyPath:@"_placeholderLabel.textColor"];
    [PassView addSubview:CodeText];

    codeB = [UIButton buttonWithType:UIButtonTypeCustom];
    codeB.frame = CGRectMake(CGRectGetMaxX(PassView.frame) +8 ,CGRectGetMaxY(photoView.frame) +14, SCREEN_W - 150 - 118, 35);
    [codeB setBackgroundImage:[UIImage imageNamed:@"login_code"] forState:UIControlStateNormal];
    [codeB setTitle:@"获取验证码" forState:UIControlStateNormal];
    codeB.titleLabel.font = Font(15);
    [codeB setTitleColor:COLOR(255, 255, 255) forState:UIControlStateNormal];
    [codeB addTarget:self action:@selector(codeAction) forControlEvents:UIControlEventTouchUpInside];
    [codeB setTitleEdgeInsets:UIEdgeInsetsMake(-3, 0, 0, 0)];
    [SecondV addSubview:codeB];
    
    
    UIButton *sureB = [UIButton buttonWithType:UIButtonTypeCustom];
    sureB.frame = CGRectMake(30, CGRectGetMaxY(PassView.frame) +60, SCREEN_W -110, 35);
    [sureB setTitle:@"下一步" forState:UIControlStateNormal];
    [sureB setTitleColor:[UIColor whiteColor] forState:UIControlStateNormal];
    [sureB setBackgroundImage:[UIImage imageNamed:@"login_sure"] forState:UIControlStateNormal];
    sureB.titleLabel.font = Font(18);
    [sureB addTarget:self action:@selector(Surelogin) forControlEvents:UIControlEventTouchUpInside];
    [SecondV addSubview:sureB];
    
}

- (void)photoCode:(UIButton *)sender{
    NSLog(@"切换图片");
    [self createPhotoCode];
    [sender sd_setImageWithURL:[NSURL URLWithString:[NSString stringWithFormat:@"https://api.cloudcpc.com/home/Login/create?id=%@",randomNumber]] forState:UIControlStateNormal placeholderImage:nil options:SDWebImageRefreshCached];
    
}


- (void)codeAction{
    if (PhoneText.text.length != 11) {
        [self showError:@"请输入你的手机号"];
        return;
    }
    [self showHUD:nil];
    WEAKSELF
    NSString  *biz =[NSString stringWithFormat:@"&tel=%@",PhoneText.text] ;
    [ConnectionRequestMgr GetSessionWithUrl:sendSMS parameter:biz successBlock:^(NSDictionary *dict){
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            [codeB setUserInteractionEnabled:NO];
            timer = [NSTimer scheduledTimerWithTimeInterval:1.0 target:self selector:@selector(code) userInfo:nil repeats: YES];
        }else{
            [weakSelf showError:dict[@"msg"]];
        }
    } failBlock:^(NSString *errorStr) {
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
    }];
    
}

- (void)backAction{
    
    [self.navigationController popViewControllerAnimated:NO];
    
}

- (void)Surelogin{
    
    if (PhoneText.text.length != 11) {
        [self showError:@"请输入你的手机号"];
        return;
    }else if (photoText.text.length ==0){
        [self showError:@"请输入你图形验证码"];
        return;
    }else if (CodeText.text.length ==0) {
        [self showError:@"请输入你的验证码"];
        return;
    }
    [self showHUD:nil];
    WEAKSELF
    NSDictionary *biz;
    if ([self.type isEqualToString:@"1"]) {
        biz = @{@"tel":PhoneText.text,@"captcha":photoText.text,@"code":CodeText.text,@"id":randomNumber};
    }else{
        biz = @{@"tel":PhoneText.text,@"captcha":photoText.text,@"code":CodeText.text,@"id":randomNumber,@"type":@"1"};
    }
    
    [ConnectionRequestMgr POSTSessionWithUrl:Loginregister parameter:biz successBlock:^(NSDictionary *dict) {
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            if ([self.type isEqualToString:@"1"]) {
                [[UIHelper sharedSingleton] pushVC:@"RegisterNextViewController" vc:self parames:@{@"phoneStr":PhoneText.text}];
            }else{
                   [[UIHelper sharedSingleton] pushVC:@"ForgetPassWordViewController" vc:self parames:@{@"phoneStr":PhoneText.text}];
            }
        }else{
            [weakSelf showError:dict[@"msg"]];
        }
    } failBlock:^(NSString *errorStr) {
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
    }];
}

- (void)code{
    int b = a--;
    if (b >= 0) {
        [codeB setUserInteractionEnabled:NO];
        [codeB setTitle:[NSString stringWithFormat:@"%ds",b]forState:UIControlStateNormal];
    }else{
        [timer invalidate];
        [codeB setUserInteractionEnabled:YES];
        [codeB setTitle:@"获取验证码" forState:UIControlStateNormal];
        a = 120;
    }
}

#pragma UITextField的代理
- (BOOL)textField:(UITextField *)textField shouldChangeCharactersInRange:(NSRange)range replacementString:(NSString *)string{
    if (textField.tag == 101) {
        if (range.location >= 11) {
            return NO;
        }
        return YES;
    }else{
        return YES;
    }
}

-(BOOL)textFieldShouldBeginEditing:(UITextField*)textField{
    
    if (textField.tag ==101) {
        ThePartySingTon *instance = [ThePartySingTon SharedInstance];
        if (instance.isLogin) {
            return NO;
            
        }else{
            return YES;
        }
        
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
