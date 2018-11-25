//
//  ForgetPassWordViewController.m
//  CHTC_EN
//
//  Created by macmini on 2018/5/14.
//  Copyright © 2018年 lixin. All rights reserved.
//

#import "ForgetPassWordViewController.h"

@interface ForgetPassWordViewController ()<UITextFieldDelegate>
{
    UIScrollView *mainScrollView;
    UITextField *PhoneText;
    UITextField *passOne;
    UITextField *passTwo;
    UITextField *CodeText;
    NSTimer *timer;
    int a;
    NSString *content;
    UIButton *codeB;
}

@end

@implementation ForgetPassWordViewController

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
    self.view.backgroundColor = [UIColor whiteColor];
    mainScrollView = [[UIScrollView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H)];
    mainScrollView.backgroundColor = COLOR(251, 251, 253);
    [self.view addSubview:mainScrollView];
    [self GreateUI];
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
    logoTitle.text = @"忘记密码";
    logoTitle.font = FontBold(18);
    logoTitle.textAlignment = 1;
    [BackImageV addSubview:logoTitle];
    
    UIView *firstV = [[UIView alloc] initWithFrame:CGRectMake(35, 124, SCREEN_W - 70, 394)];
    firstV.backgroundColor = [UIColor whiteColor];
    [mainScrollView addSubview:firstV];
    firstV.layer.cornerRadius = 4.5;
    firstV.layer.shadowColor =UIColorFromRGBA(0xff0404, 0.8).CGColor;
    firstV.layer.shadowOpacity = 0.15f;
    firstV.layer.shadowRadius = 8.f;
    firstV.layer.shadowOffset = CGSizeMake(0,0);
    
    UIView *SecondV = [[UIView alloc] initWithFrame:CGRectMake(25, 124, SCREEN_W - 50, 374)];
    SecondV.backgroundColor = [UIColor whiteColor];
    [mainScrollView addSubview:SecondV];
    SecondV.layer.cornerRadius = 4.5;
    SecondV.layer.shadowColor =UIColorFromRGBA(0xff0404, 0.8).CGColor;
    SecondV.layer.shadowOpacity = 0.15f;
    SecondV.layer.shadowRadius = 8.f;
    SecondV.layer.shadowOffset = CGSizeMake(0,0);
    
    UILabel *logoL = [[UILabel alloc] initWithFrame:CGRectMake(0, 40, SCREEN_W -50, 20)];
    logoL.textColor = UIColorFromRGBA(0x3e3e3e, 1);
    logoL.text = @"重置密码";
    logoL.font = FontBold(15);
    logoL.textAlignment = 1;
    [SecondV addSubview:logoL];
    
    UIView *PassWordOneView = [[UIView alloc] initWithFrame:CGRectMake(30, CGRectGetMaxY(logoL.frame) +48, SCREEN_W -110, 35)];
    PassWordOneView.backgroundColor = UIColorFromRGBA(0xfafafa, 1);
    PassWordOneView.layer.cornerRadius = 8;
    [SecondV addSubview:PassWordOneView];
    PassWordOneView.layer.borderWidth = 1.5;
    PassWordOneView.layer.borderColor = UIColorFromRGBA(0xf4f4f5,1).CGColor;
    
    passOne = [[UITextField alloc] initWithFrame:CGRectMake(10, 0,SCREEN_W -120, 35)];
    passOne.delegate = self;
    passOne.placeholder = @"请输入新的密码(至少6位)";
    passOne.textColor = UIColorFromRGBA(0x333333, 1);
    passOne.font = Font(15);
    [passOne setValue:UIColorFromRGBA(0x999999, 1) forKeyPath:@"_placeholderLabel.textColor"];
    passOne.secureTextEntry = YES;
    [PassWordOneView addSubview:passOne];
    
    UIView *PassWordTwoView = [[UIView alloc] initWithFrame:CGRectMake(30, CGRectGetMaxY(PassWordOneView.frame) +14, SCREEN_W -110, 35)];
    PassWordTwoView.backgroundColor = UIColorFromRGBA(0xfafafa, 1);
    PassWordTwoView.layer.cornerRadius = 8;
    [SecondV addSubview:PassWordTwoView];
    PassWordTwoView.layer.borderWidth = 1.5;
    PassWordTwoView.layer.borderColor = UIColorFromRGBA(0xf4f4f5,1).CGColor;
    
    passTwo = [[UITextField alloc] initWithFrame:CGRectMake(10, 0,SCREEN_W -86, 35)];
    passTwo.delegate = self;
    passTwo.placeholder = @"请再次确认密码";
    passTwo.textColor = UIColorFromRGBA(0x333333, 1);
    passTwo.font = Font(15);
    [passTwo setValue:UIColorFromRGBA(0x999999, 1) forKeyPath:@"_placeholderLabel.textColor"];
    passTwo.secureTextEntry = YES;
    [PassWordTwoView addSubview:passTwo];
    
    UIButton *sureB = [UIButton buttonWithType:UIButtonTypeCustom];
    sureB.frame = CGRectMake(30, CGRectGetMaxY(PassWordTwoView.frame) +65, SCREEN_W -110, 35);
    [sureB setTitle:@"确认" forState:UIControlStateNormal];
    [sureB setTitleColor:[UIColor whiteColor] forState:UIControlStateNormal];
    [sureB setBackgroundImage:[UIImage imageNamed:@"login_sure"] forState:UIControlStateNormal];
    sureB.titleLabel.font = Font(18);
    [sureB addTarget:self action:@selector(Surelogin) forControlEvents:UIControlEventTouchUpInside];
    [SecondV addSubview:sureB];
    
}

- (void)Surelogin{

   if (passOne.text.length ==0 && passTwo.text.length ==0){
        [self showError:@"请输入你密码"];
        return;
    }else if (![passOne.text isEqualToString: passTwo.text]){
        [self showError:@"二次输入的密码不对"];
        return;
    }else if (passOne.text.length <6){
        [self showError:@"密码需要大于六位数"];
        return;
    }
    
    [self showHUD:nil];
    WEAKSELF
    NSDictionary *biz = @{@"pass":passOne.text,@"tel":self.phoneStr,@"pass1":passTwo.text};
    [ConnectionRequestMgr POSTSessionWithUrl:SecondForgetPass parameter:biz successBlock:^(NSDictionary *dict) {
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            for (UIViewController *controller in self.navigationController.viewControllers) {
                if ([controller isKindOfClass:[LoginViewController class]]) {
                    [self.navigationController popToViewController:controller animated:YES];
                }
            }
        }else{
            
            [weakSelf showError:dict[@"msg"]];
        }
    } failBlock:^(NSString *errorStr) {
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
    }];
}

- (void)back_action{
    
    for (UIViewController *controller in self.navigationController.viewControllers) {
        if ([controller isKindOfClass:[LoginViewController class]]) {
            [self.navigationController popToViewController:controller animated:YES];
        }
    }
    
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
