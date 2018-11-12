//
//  RegisterNextViewController.m
//  TheParty
//
//  Created by fuz-bmac on 2018/10/10.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "RegisterNextViewController.h"
#import "CGXPickerView.h"
#import "LoginViewController.h"
@interface RegisterNextViewController ()<UITextFieldDelegate>
{
    UIScrollView *mainScrollView;
    UITextField *NameText;
    UITextField *passOne;
    UITextField *passTwo;
    UILabel *organizationText;
    UILabel *companyText;
    UILabel *faceText;
    NSArray *organizationTitleArr;
    NSMutableArray *organizationArr;
    NSArray *companyTitleArr;
    NSMutableArray *companyArr;
    NSString *companyID;
}

@end

@implementation RegisterNextViewController

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
    organizationArr = [[NSMutableArray alloc] init];
    organizationTitleArr = [[NSArray alloc] init];
    companyTitleArr = [[NSArray alloc] init];
    companyArr = [[NSMutableArray alloc] init];
    if (NSFoundationVersionNumber>=NSFoundationVersionNumber_iOS_8_0) {
        self.edgesForExtendedLayout = UIRectEdgeNone;
        self.extendedLayoutIncludesOpaqueBars = NO;
        self.modalPresentationCapturesStatusBarAppearance = NO;
        self.automaticallyAdjustsScrollViewInsets = NO;
    }
    self.title = @"个人信息录入";
    self.view.backgroundColor = [UIColor whiteColor];
    mainScrollView = [[UIScrollView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H)];
    mainScrollView.userInteractionEnabled= YES;
    mainScrollView.backgroundColor = COLOR(251, 251, 253);
    [self.view addSubview:mainScrollView];
    [self createData];
    [self GreateUI];
    
}

- (void)createData{
    
    [self showHUD:nil];
    WEAKSELF
    [ConnectionRequestMgr GetSessionWithUrl:Organization parameter:nil successBlock:^(NSDictionary *dict){
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            organizationTitleArr = dict[@"data"];
            for (int i = 0; i< [dict[@"data"] count]; i++) {
                [organizationArr addObject:dict[@"data"][i][@"company_name"]];
            }
        }else{
            [weakSelf showError:dict[@"msg"]];
        }
    } failBlock:^(NSString *errorStr) {
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
    
    }];
    
    
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
    
    UIView *firstV = [[UIView alloc] initWithFrame:CGRectMake(35, 124, SCREEN_W - 70, 472)];
    firstV.backgroundColor = [UIColor whiteColor];
    [mainScrollView addSubview:firstV];
    firstV.layer.cornerRadius = 4.5;
    firstV.layer.shadowColor =UIColorFromRGBA(0xff0404, 0.8).CGColor;
    firstV.layer.shadowOpacity = 0.15f;
    firstV.layer.shadowRadius = 8.f;
    firstV.layer.shadowOffset = CGSizeMake(0,0);
    
    UIView *SecondV = [[UIView alloc] initWithFrame:CGRectMake(25, 124, SCREEN_W - 50, 452)];
    SecondV.backgroundColor = [UIColor whiteColor];
    [mainScrollView addSubview:SecondV];
    SecondV.layer.cornerRadius = 4.5;
    SecondV.layer.shadowColor =UIColorFromRGBA(0xff0404, 0.8).CGColor;
    SecondV.layer.shadowOpacity = 0.15f;
    SecondV.layer.shadowRadius = 8.f;
    SecondV.layer.shadowOffset = CGSizeMake(0,0);
    
    UILabel *logoL = [[UILabel alloc] initWithFrame:CGRectMake(0, 25, SCREEN_W -50, 20)];
    logoL.textColor = UIColorFromRGBA(0x3e3e3e, 1);
    logoL.text = @"个人信息录入";
    logoL.font = FontBold(15);
    logoL.textAlignment = 1;
    [SecondV addSubview:logoL];
    
    
    NSArray *arr = @[@"请输入您的姓名",@"请输入密码",@"请再次确认密码",@"请选择公司",@"请选择组织",@"请选择政治面貌"];
    for (int i = 0; i < 6; i++) {
        
        UIView *BackView = [[UIView alloc] initWithFrame:CGRectMake(30, CGRectGetMaxY(logoL.frame)+25 + i*50, SCREEN_W -110, 35)];
        BackView.tag = 300 + i;
        BackView.backgroundColor =UIColorFromRGBA(0xfafafa,1);
        BackView.layer.cornerRadius = 8;
        [SecondV addSubview:BackView];
        BackView.layer.borderWidth = 1.5;
        BackView.layer.borderColor = UIColorFromRGBA(0xf4f4f5,1).CGColor;
        
        UITextField *textFild = [[UITextField alloc] initWithFrame:CGRectMake(10, 0,SCREEN_W -120, 35)];
        textFild.delegate = self;
        textFild.placeholder = arr[i];
        textFild.textColor = UIColorFromRGBA(0x333333, 1);
        textFild.font = Font(15);
        [textFild setValue:UIColorFromRGBA(0x999999, 1) forKeyPath:@"_placeholderLabel.textColor"];
        [BackView addSubview:textFild];
        
        UILabel *label = [[UILabel alloc] initWithFrame:CGRectMake(10, 0,SCREEN_W -150, 35)];
        label.text = arr[i];
        label.textColor = UIColorFromRGBA(0x999999, 1);
        label.font = Font(15);
        [BackView addSubview:label];
    
        UITapGestureRecognizer *tap = [[UITapGestureRecognizer alloc] initWithTarget:self action:@selector(actionChoose:)];
        [BackView addGestureRecognizer:tap];
        
        UIImageView *rightV = [[UIImageView alloc] initWithFrame:CGRectMake(SCREEN_W -135 , 12.5, 14, 10)];
        rightV.image = [UIImage imageNamed:@"login_down"];
        [BackView addSubview:rightV];
        if (i == 0) {
            NameText = textFild;
            rightV.hidden = YES;
            label.hidden = YES;
        }else if (i ==1){
            passOne = textFild;
            rightV.hidden = YES;
            label.hidden = YES;
        }else if (i ==2){
            passTwo = textFild;
            rightV.hidden = YES;
            label.hidden = YES;
        }else if (i ==3){
            textFild.hidden = YES;
            companyText = label;
        }else if (i == 4){
            textFild.hidden = YES;
            organizationText = label;
        }else if (i == 5){
            textFild.hidden = YES;
            faceText = label;
        }
    }
    UIButton *sureB = [UIButton buttonWithType:UIButtonTypeCustom];
    sureB.frame = CGRectMake(30, 390, SCREEN_W -110, 35);
    [sureB setTitle:@"确定" forState:UIControlStateNormal];
    [sureB setTitleColor:[UIColor whiteColor] forState:UIControlStateNormal];
    [sureB setBackgroundImage:[UIImage imageNamed:@"login_sure"] forState:UIControlStateNormal];
    sureB.titleLabel.font = Font(18);
    [sureB addTarget:self action:@selector(Surelogin) forControlEvents:UIControlEventTouchUpInside];
    [SecondV addSubview:sureB];
    
}

- (void)actionChoose:(UITapGestureRecognizer *)sender{
    [self.view endEditing:YES];
    NSArray *faceArr = @[@"党员",@"群众"];
    if (sender.view.tag ==303) {
        [CGXPickerView showStringPickerWithTitle:@"请选择公司" DataSource:[organizationArr copy] DefaultSelValue:organizationArr[0] IsAutoSelect:NO ResultBlock:^(id selectValue, id selectRow) {
            NSLog(@"%@",selectValue);
            
            
            for (NSDictionary *dic in organizationTitleArr) {
                if ([selectValue isEqualToString:dic[@"company_name"]]) {
                    companyID = dic[@"id"];
                }
            }
            
            [self showHUD:nil];
            WEAKSELF
            NSDictionary *biz = @{@"company_id":companyID};
            [ConnectionRequestMgr POSTSessionWithUrl:Branchs parameter:biz successBlock:^(NSDictionary *dict){
                [weakSelf hideHUD];
                if ([dict[@"code"] integerValue] == 1) {
                    companyTitleArr = dict[@"data"];
                    for (int i = 0; i< [dict[@"data"] count]; i++) {
                        [companyArr addObject:dict[@"data"][i][@"branchs_name"]];
                    }
                    
                    companyText.text = selectValue;
                    companyText.textColor = UIColorFromRGBA(0x333333, 1);
                    
                }else{
                    [weakSelf showError:dict[@"msg"]];
                }
            } failBlock:^(NSString *errorStr) {
                [weakSelf hideHUD];
                [weakSelf showError:errorStr];
                
            }];
        }];
    }else if (sender.view.tag == 304){
        if ([companyText.text isEqualToString:@"请选择公司"]) {
            [self showError:@"请先选择公司！"];
        }else{
            [CGXPickerView showStringPickerWithTitle:@"请选择组织" DataSource:companyArr DefaultSelValue:companyArr[0] IsAutoSelect:NO ResultBlock:^(id selectValue, id selectRow) {
                NSLog(@"%@",selectValue);
                organizationText.text = selectValue;
                organizationText.textColor = UIColorFromRGBA(0x333333, 1);
            }];
        }
 
    }else if (sender.view.tag == 305){
        [CGXPickerView showStringPickerWithTitle:@"请选择政治面貌" DataSource:faceArr DefaultSelValue:faceArr[0] IsAutoSelect:NO ResultBlock:^(id selectValue, id selectRow) {
            NSLog(@"%@",selectValue);
            faceText.text = selectValue;
            faceText.textColor = UIColorFromRGBA(0x333333, 1);
        }];
    }
}

- (void)back_action{
    
    for (UIViewController *controller in self.navigationController.viewControllers) {
        if ([controller isKindOfClass:[LoginViewController class]]) {
            [self.navigationController popToViewController:controller animated:YES];
        }
    }
    
}

- (void)Surelogin{
    if (NameText.text.length ==0) {
        [self showError:@"请输入你的姓名"];
        return;
    }else if (passOne.text.length ==0 && passTwo.text.length ==0){
        [self showError:@"请输入你密码"];
        return;
    }else if (![passOne.text isEqualToString: passTwo.text]){
        [self showError:@"二次输入的密码不对"];
        return;
    }else if (passOne.text.length <6){
        [self showError:@"密码需要大于六位数"];
        return;
    }else if ([organizationText.text isEqualToString:@"请选择组织"]){
        [self showError:@"请选择对应的组织"];
        return;
    }else if ([faceText.text isEqualToString:@"请选择政治面貌"]){
        [self showError:@"请选择政治面貌"];
        return;
    }
    NSString *faceID;
    if ([faceText.text isEqualToString:@"党员"]) {
        faceID = @"1";
    }else{
        faceID = @"2";
    }
    NSString *organizationID;
    for (NSDictionary *dic in companyTitleArr) {
        if ([organizationText.text isEqualToString:dic[@"branchs_name"]]) {
            organizationID = dic[@"id"];
            
        }
    }
    [self showHUD:nil];
    WEAKSELF
    NSDictionary *biz = @{@"company_id":companyID,@"tel":self.phoneStr,@"password":passOne.text,@"password1":passTwo.text,@"username":NameText.text,@"branchs_id":organizationID,@"party_status":faceID,@"uid":self.WechatID.length>0?self.WechatID:@""};
    NSString *str = @"home/Login/wechat_entry";
    if (self.WechatID.length>0) {
        str = @"home/Login/wechat_entry";
    }else{
        str = Nextregister;
    }
    [ConnectionRequestMgr POSTSessionWithUrl:str parameter:biz successBlock:^(NSDictionary *dict) {
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


/*
#pragma mark - Navigation

// In a storyboard-based application, you will often want to do a little preparation before navigation
- (void)prepareForSegue:(UIStoryboardSegue *)segue sender:(id)sender {
    // Get the new view controller using [segue destinationViewController].
    // Pass the selected object to the new view controller.
}
*/

@end
