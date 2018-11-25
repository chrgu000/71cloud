//
//  ContributeViewController.m
//  TheParty
//
//  Created by macmini on 2018/8/3.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "ContributeViewController.h"
#import "CGXPickerView.h"
@interface ContributeViewController ()<UIScrollViewDelegate,UITextFieldDelegate,UITextViewDelegate>
{
    UIScrollView *mainScrollView;
    UITextView *subjectText;
    UITextField *titleText;
    UILabel *changeL;
    UILabel *subjectTextplaceholder;
    NSArray *Arr;
    NSMutableArray *titleArr;
}

@end

@implementation ContributeViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    // Do any additional setup after loading the view.
    self.title = @"投稿";
    Arr = [[NSArray alloc] init];
    titleArr = [[NSMutableArray alloc] init];
    self.view.backgroundColor = [UIColor whiteColor];
    mainScrollView = [[UIScrollView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H)];
    mainScrollView.userInteractionEnabled =YES;
    [self.view addSubview:mainScrollView];
    
    
    [self createDownView];
    [self createData];
}

- (void)createData{
    [self showHUD:nil];
    WEAKSELF
    [ConnectionRequestMgr GetSessionWithUrl:ContributeList parameter:nil successBlock:^(NSDictionary *dict) {
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            Arr = dict[@"data"];
            for (int i = 0; i< [dict[@"data"] count]; i++) {
                [titleArr addObject:dict[@"data"][i][@"name"]];
            }
            [self GreateUI];
        }else{
            [weakSelf showError:dict[@"msg"]];
        }
    } failBlock:^(NSString *errorStr) {
        
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
    }];
    
}

- (void)GreateUI{
    UIImageView *headImageV = [[UIImageView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, 180)];
    headImageV.image = [UIImage imageNamed:@"heard_banner"];
    [mainScrollView addSubview:headImageV];
    
    NSArray *titleArr = @[@"文章标题:",@"稿件分类:",@"投稿内容:"];
    for (int i = 0; i<3; i++) {
        UILabel *leftL = [[UILabel alloc] initWithFrame:CGRectMake(16, CGRectGetMaxY(headImageV.frame) + 34 +i*47 , 70, 16)];
        leftL.text = titleArr[i];
        leftL.textColor = UIColorFromRGBA(0x333333, 1);
        leftL.font = Font(16);
        [mainScrollView addSubview:leftL];
        
        UIView *backView = [[UIView alloc] initWithFrame:CGRectMake(100, CGRectGetMaxY(headImageV.frame) +24 +i*46, SCREEN_W -116, 36)];
        backView.layer.borderWidth = 1;
        backView.layer.borderColor = UIColorFromRGBA(0xe6e6e6, 1).CGColor;
        backView.layer.cornerRadius = 5;
        backView.userInteractionEnabled = YES;
        [mainScrollView addSubview:backView];
        
        if (i ==0) {
            titleText = [[UITextField alloc] initWithFrame:CGRectMake(5, 0, SCREEN_W -126, 36)];
            titleText.delegate = self;
            titleText.placeholder = @"请输入文章标题";
            titleText.textColor = UIColorFromRGBA(0x333333, 1);
            titleText.font = Font(15);
            [titleText setValue:UIColorFromRGBA(0x999999, 1) forKeyPath:@"_placeholderLabel.textColor"];
            [backView addSubview:titleText];
        }else if (i == 1){
            
            UIImageView *ImageV = [[UIImageView alloc] initWithFrame:CGRectMake(SCREEN_W -136, 15,10, 6)];
            ImageV.image = [UIImage imageNamed:@"heard_down"];
            [backView addSubview:ImageV];
            
            changeL = [[UILabel alloc] initWithFrame:CGRectMake(0, 0 , SCREEN_W -146, 36)];
            changeL.text = @"— 请选择 —";
            changeL.textColor = UIColorFromRGBA(0x999999, 1);
            changeL.font = Font(13);
            changeL.textAlignment = 2;
            [backView addSubview:changeL];
           
            UITapGestureRecognizer *tap = [[UITapGestureRecognizer alloc] initWithTarget:self action:@selector(changeAction)];
            [backView addGestureRecognizer:tap];
            

        }else{
            backView.frame = CGRectMake(100, CGRectGetMaxY(headImageV.frame) +24 +i*46, SCREEN_W -116, 200);
            subjectText = [[UITextView alloc] initWithFrame:CGRectMake(5, 10, SCREEN_W -126, 190)];
            subjectText.delegate = self;
            subjectText.textColor = UIColorFromRGBA(0x333333, 1);
            subjectText.font = Font(15);
            [backView addSubview:subjectText];
            
            subjectTextplaceholder = [[UILabel alloc] initWithFrame:CGRectMake(0, 5,150, 12)];
            subjectTextplaceholder.textColor = UIColorFromRGBA(0x999999, 1);
            subjectTextplaceholder.text = @"请输入投稿内容";
            subjectTextplaceholder.font = Font(15);
            [subjectText addSubview:subjectTextplaceholder];
        }
    }
    mainScrollView.contentSize = CGSizeMake(0, CGRectGetMaxY(headImageV.frame) +24 +400);
    
}

- (void)createDownView{
    UIButton *button = [UIButton buttonWithType:UIButtonTypeCustom];
    if (kDevice_Is_iPhoneX) {
        button.frame = CGRectMake(0, SCREEN_H - 50-88, SCREEN_W, 50);
    }else{
        button.frame = CGRectMake(0, SCREEN_H - 36-64, SCREEN_W, 36);
    }
    button.backgroundColor = [UIColor redColor];
    [button setTitle:@"提交投稿" forState:UIControlStateNormal];
    [button setTitleColor:[UIColor whiteColor] forState:UIControlStateNormal];
    [button addTarget:self action:@selector(ActityAction) forControlEvents:UIControlEventTouchUpInside];
    [self.view addSubview:button];
}

- (void)ActityAction{
    if (titleText.text.length ==0) {
        [self showError:@"请输入标题"];
        return;
    }else if ([changeL.text isEqualToString:@"— 请选择 —"]){
        [self showError:@"请选择稿件分类"];
        return;
    }else if (subjectText.text.length ==0){
        [self showError:@"请输入投稿内容"];
        return;
    }
    [self showHUD:nil];
    WEAKSELF
    NSString *cate_id;
    for (int i = 0; i <Arr.count; i++) {
        if ([changeL.text isEqualToString:Arr[i][@"name"]]) {
            cate_id = Arr[i][@"id"];
        }
    }
    NSDictionary *biz = @{@"title":titleText.text,@"content":subjectText.text,@"cate_id":cate_id};
    [ConnectionRequestMgr POSTSessionWithUrl:Contribute parameter:biz successBlock:^(NSDictionary *dict) {
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            [weakSelf showSuccess:@"投稿成功！"];
            [self.navigationController popToRootViewControllerAnimated:YES];
        }else{
            [weakSelf showError:dict[@"msg"]];
        }
    } failBlock:^(NSString *errorStr) {
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
    }];
    
    
}

- (void)changeAction{
    [self.view endEditing:YES];
    [CGXPickerView showStringPickerWithTitle:@"稿件分类" DataSource:[titleArr copy] DefaultSelValue:titleArr[0] IsAutoSelect:NO ResultBlock:^(id selectValue, id selectRow) {
        NSLog(@"%@",selectValue);
        changeL.text = selectValue;
    }];
}


#pragma mark UITextViewDelegate
- (BOOL)textView:(UITextView *)textView shouldChangeTextInRange:(NSRange)range replacementText:(NSString *)text
{
    if (![text isEqualToString:@""])
    {
        subjectTextplaceholder.hidden = YES;
    }
    if ([text isEqualToString:@""] && range.location == 0 && range.length == 1)
    {
        subjectTextplaceholder.hidden = NO;
    }
    return YES;
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
