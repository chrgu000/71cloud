//
//  FacebookViewController.m
//  TheParty
//
//  Created by macmini on 2018/8/7.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "FacebookViewController.h"

@interface FacebookViewController ()<UITextViewDelegate,UITextFieldDelegate>
{
    UIPlaceHolderTextView *_textView;
    
    CGFloat _posY;
}

@end

@implementation FacebookViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    self.view.backgroundColor = COLOR(249, 245, 245);
    self.title = @"反馈意见";
    UIButton *submitBtn = [UIButton buttonWithType:UIButtonTypeCustom];
    [submitBtn setFrame:CGRectMake(0, 0, 65, 44)];
    [submitBtn setTitle:@"提交" forState:UIControlStateNormal];
    [submitBtn setTitleColor:[UIColor whiteColor] forState:UIControlStateNormal];
    [submitBtn.titleLabel setFont:[UIFont systemFontOfSize:15.0]];
    [submitBtn addTarget:self action:@selector(submitAction) forControlEvents:UIControlEventTouchUpInside];
    UIBarButtonItem *submitItem = [[UIBarButtonItem alloc] initWithCustomView:submitBtn];
    self.navigationItem.rightBarButtonItem = submitItem;
    
    _textView = [[UIPlaceHolderTextView alloc] initWithFrame:CGRectMake(16, 20, SCREEN_W - 32, 200)];
    _textView.tag = 666;
    _textView.placeholder = @"请输入你的反馈意见";
    _textView.font = [UIFont systemFontOfSize:15];
    _textView.backgroundColor = [UIColor whiteColor];
    //    _textView.layer.borderColor = UIColorFromRGBA(0xa2a2a2, 0.5).CGColor;
    //    _textView.layer.borderWidth = 1.0;
    _textView.layer.masksToBounds = YES;
    _textView.layer.cornerRadius = 3;
    _textView.delegate = self;
    [self.view addSubview:_textView];
    
 


}

- (void)submitAction {
    if (_textView.text.length ==0) {
        [self showError:@"请输入你的反馈意见"];
        return;
    }
    [self showHUD:nil];
    WEAKSELF
    NSDictionary *biz = @{@"content":_textView.text};
    [ConnectionRequestMgr POSTSessionWithUrl:Advice parameter:biz successBlock:^(NSDictionary *dict) {
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            [weakSelf showSuccess:@"提交成功！"];
            [self.navigationController popViewControllerAnimated:YES];
        }else{
            [weakSelf showError:dict[@"message"]];
        }
    } failBlock:^(NSString *errorStr) {
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
    }];
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
