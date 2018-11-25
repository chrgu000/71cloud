//
//  ContributeViewController.m
//  TheParty
//
//  Created by macmini on 2018/8/3.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "ContributeViewController.h"
#import "CGXPickerView.h"
#import "QiNiuPhotoUpLoad.h"
@interface ContributeViewController ()<UIScrollViewDelegate,UITextFieldDelegate,UITextViewDelegate,UIActionSheetDelegate,UIImagePickerControllerDelegate,UINavigationControllerDelegate>
{
    UIScrollView *mainScrollView;
    UITextView *subjectText;
    UITextField *CompanyText;
    UILabel *changeL;
    UILabel *subjectTextplaceholder;
    NSArray *Arr;
    NSMutableArray *titleArr;
    UIImageView *PhotoV;
    NSString *photoStr;
    NSString *timeStr;
    NSString *upTimeStr;
    UIButton *cancelB;
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
    [self GreateUI];
//
//    [self createDownView];
//    [self createData];
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
    headImageV.image = [UIImage imageNamed:@"contribute_banner"];
    [mainScrollView addSubview:headImageV];
    
    UILabel *leftTimeL = [[UILabel alloc] initWithFrame:CGRectMake(16, CGRectGetMaxY(headImageV.frame) + 34 , 80, 16)];
    leftTimeL.text = @"入党时间:";
    leftTimeL.textColor = UIColorFromRGBA(0x333333, 1);
    leftTimeL.font = Font(16);
    [mainScrollView addSubview:leftTimeL];
    
    UIView *TimebackView = [[UIView alloc] initWithFrame:CGRectMake(110, CGRectGetMaxY(headImageV.frame) +24, SCREEN_W -126, 36)];
    TimebackView.backgroundColor = COLOR(250, 250, 250);
    TimebackView.layer.borderWidth = 0.5;
    TimebackView.layer.borderColor = COLOR(229, 229, 229).CGColor;
    TimebackView.layer.cornerRadius = 5;
    TimebackView.userInteractionEnabled = YES;
    [mainScrollView addSubview:TimebackView];
    
    UIImageView *ImageV = [[UIImageView alloc] initWithFrame:CGRectMake(SCREEN_W -146, 15,10, 6)];
    ImageV.image = [UIImage imageNamed:@"contribute_xiala"];
    [TimebackView addSubview:ImageV];
    
    changeL = [[UILabel alloc] initWithFrame:CGRectMake(0, 0 , SCREEN_W -156, 36)];
    changeL.text = @"— 请选择 —";
    changeL.textColor = COLOR(153, 153, 153);
    changeL.font = Font(13);
    changeL.textAlignment = 2;
    [TimebackView addSubview:changeL];
    
    UITapGestureRecognizer *tap = [[UITapGestureRecognizer alloc] initWithTarget:self action:@selector(changeAction)];
    [TimebackView addGestureRecognizer:tap];
    
    
    UILabel *CompanyL = [[UILabel alloc] initWithFrame:CGRectMake(16, CGRectGetMaxY(TimebackView.frame) + 30 , 80, 16)];
    CompanyL.text = @"所属部门:";
    CompanyL.textColor = UIColorFromRGBA(0x333333, 1);
    CompanyL.font = Font(16);
    [mainScrollView addSubview:CompanyL];
    
    UIView *CompanybackView = [[UIView alloc] initWithFrame:CGRectMake(110, CGRectGetMaxY(TimebackView.frame) +20, SCREEN_W -126, 36)];
    CompanybackView.backgroundColor = COLOR(250, 250, 250);
    CompanybackView.layer.borderWidth = 0.5;
    CompanybackView.layer.borderColor = COLOR(229, 229, 229).CGColor;
    CompanybackView.layer.cornerRadius = 5;
    CompanybackView.userInteractionEnabled = YES;
    [mainScrollView addSubview:CompanybackView];
    
    CompanyText = [[UITextField alloc] initWithFrame:CGRectMake(5, 0, SCREEN_W -126, 36)];
    CompanyText.delegate = self;
    CompanyText.placeholder = @"请输入所属部门";
    CompanyText.textColor = UIColorFromRGBA(0x333333, 1);
    CompanyText.font = Font(15);
    [CompanyText setValue:UIColorFromRGBA(0x999999, 1) forKeyPath:@"_placeholderLabel.textColor"];
    [CompanybackView addSubview:CompanyText];

    
    
    UILabel *leftHeartL = [[UILabel alloc] initWithFrame:CGRectMake(16, CGRectGetMaxY(CompanybackView.frame) + 30 , 80, 40)];
    leftHeartL.text = @"向党说句心里话   ：";
    leftHeartL.textColor = UIColorFromRGBA(0x333333, 1);
    leftHeartL.font = Font(16);
    leftHeartL.numberOfLines = 2;
    [mainScrollView addSubview:leftHeartL];
    
    UIView *HeartbackView = [[UIView alloc] initWithFrame:CGRectMake(110, CGRectGetMaxY(CompanybackView.frame) +20, SCREEN_W -126, 150)];
    HeartbackView.backgroundColor = COLOR(250, 250, 250);
    HeartbackView.layer.borderWidth = 0.5;
    HeartbackView.layer.borderColor = COLOR(229, 229, 229).CGColor;
    HeartbackView.layer.cornerRadius = 5;
    HeartbackView.userInteractionEnabled = YES;
    [mainScrollView addSubview:HeartbackView];
    
    subjectText = [[UITextView alloc] initWithFrame:CGRectMake(5, 10, SCREEN_W -126, 130)];
    subjectText.delegate = self;
    subjectText.backgroundColor = [UIColor clearColor];
    subjectText.textColor = UIColorFromRGBA(0x333333, 1);
    subjectText.font = Font(15);
    [HeartbackView addSubview:subjectText];
    
    subjectTextplaceholder = [[UILabel alloc] initWithFrame:CGRectMake(0, 5,SCREEN_W -126, 20)];
    subjectTextplaceholder.textColor = UIColorFromRGBA(0x999999, 1);
    subjectTextplaceholder.text = @"请输入内容，字数在25个字以内！";
    subjectTextplaceholder.font = Font(15);
    [subjectText addSubview:subjectTextplaceholder];

    UILabel *leftPhotoL = [[UILabel alloc] initWithFrame:CGRectMake(16, CGRectGetMaxY(HeartbackView.frame) + 30 , 80, 16)];
    leftPhotoL.text = @"我的自拍:";
    leftPhotoL.textColor = UIColorFromRGBA(0x333333, 1);
    leftPhotoL.font = Font(16);
    [mainScrollView addSubview:leftPhotoL];
    
    PhotoV = [[UIImageView alloc] initWithFrame:CGRectMake(110, CGRectGetMaxY(HeartbackView.frame) + 20, 50, 50)];
    PhotoV.image = [UIImage imageNamed:@"contribute_camera"];
    PhotoV.userInteractionEnabled = YES;
    [mainScrollView addSubview:PhotoV];
    
    cancelB = [UIButton buttonWithType:UIButtonTypeCustom];
    cancelB.frame = CGRectMake(150, CGRectGetMaxY(HeartbackView.frame) + 10, 20, 20);
    [cancelB setImage:[UIImage imageNamed:@"close"] forState:UIControlStateNormal];
    [cancelB addTarget:self action:@selector(cancelPhoto) forControlEvents:UIControlEventTouchUpInside];
    cancelB.hidden = YES;
    [mainScrollView addSubview:cancelB];
    
    
    UITapGestureRecognizer *PhotoTap = [[UITapGestureRecognizer alloc] initWithTarget:self action:@selector(photoAction)];
    [PhotoV addGestureRecognizer:PhotoTap];
    
    UILabel *downL = [[UILabel alloc] initWithFrame:CGRectMake(110, CGRectGetMaxY(PhotoV.frame) + 7, 50, 11)];
    downL.textColor = COLOR(153, 153, 153);
    downL.font = Font(11);
    downL.textAlignment = 1;
    downL.text = @"上传照片";
    [mainScrollView addSubview:downL];
    
    UIButton *button = [UIButton buttonWithType:UIButtonTypeCustom];
    button.frame = CGRectMake((SCREEN_W - 225)/2,CGRectGetMaxY(downL.frame) + 54, 225, 36);
    button.backgroundColor = [UIColor redColor];
    button.layer.masksToBounds = YES;
    button.layer.cornerRadius = 18;
    [button setTitle:@"提交投稿" forState:UIControlStateNormal];
    [button setTitleColor:[UIColor whiteColor] forState:UIControlStateNormal];
    [button addTarget:self action:@selector(ActityAction) forControlEvents:UIControlEventTouchUpInside];
    [mainScrollView addSubview:button];
    
    mainScrollView.contentSize = CGSizeMake(0, CGRectGetMaxY(button.frame) +100);
//    NSArray *titleArr = @[@"文章标题:",@"稿件分类:",@"投稿内容:"];
//    for (int i = 0; i<3; i++) {
//        UILabel *leftL = [[UILabel alloc] initWithFrame:CGRectMake(16, CGRectGetMaxY(headImageV.frame) + 34 +i*47 , 70, 16)];
//        leftL.text = titleArr[i];
//        leftL.textColor = UIColorFromRGBA(0x333333, 1);
//        leftL.font = Font(16);
//        [mainScrollView addSubview:leftL];
//
//        UIView *backView = [[UIView alloc] initWithFrame:CGRectMake(100, CGRectGetMaxY(headImageV.frame) +24 +i*46, SCREEN_W -116, 36)];
//        backView.layer.borderWidth = 1;
//        backView.layer.borderColor = UIColorFromRGBA(0xe6e6e6, 1).CGColor;
//        backView.layer.cornerRadius = 5;
//        backView.userInteractionEnabled = YES;
//        [mainScrollView addSubview:backView];
//
//        if (i ==0) {
//            titleText = [[UITextField alloc] initWithFrame:CGRectMake(5, 0, SCREEN_W -126, 36)];
//            titleText.delegate = self;
//            titleText.placeholder = @"请输入文章标题";
//            titleText.textColor = UIColorFromRGBA(0x333333, 1);
//            titleText.font = Font(15);
//            [titleText setValue:UIColorFromRGBA(0x999999, 1) forKeyPath:@"_placeholderLabel.textColor"];
//            [backView addSubview:titleText];
//        }else if (i == 1){
//
//            UIImageView *ImageV = [[UIImageView alloc] initWithFrame:CGRectMake(SCREEN_W -136, 15,10, 6)];
//            ImageV.image = [UIImage imageNamed:@"heard_down"];
//            [backView addSubview:ImageV];
//
//            changeL = [[UILabel alloc] initWithFrame:CGRectMake(0, 0 , SCREEN_W -146, 36)];
//            changeL.text = @"— 请选择 —";
//            changeL.textColor = UIColorFromRGBA(0x999999, 1);
//            changeL.font = Font(13);
//            changeL.textAlignment = 2;
//            [backView addSubview:changeL];
//
//            UITapGestureRecognizer *tap = [[UITapGestureRecognizer alloc] initWithTarget:self action:@selector(changeAction)];
//            [backView addGestureRecognizer:tap];
//
//
//        }else{
//            backView.frame = CGRectMake(100, CGRectGetMaxY(headImageV.frame) +24 +i*46, SCREEN_W -116, 200);
//            subjectText = [[UITextView alloc] initWithFrame:CGRectMake(5, 10, SCREEN_W -126, 190)];
//            subjectText.delegate = self;
//            subjectText.textColor = UIColorFromRGBA(0x333333, 1);
//            subjectText.font = Font(15);
//            [backView addSubview:subjectText];
//
//            subjectTextplaceholder = [[UILabel alloc] initWithFrame:CGRectMake(0, 5,150, 12)];
//            subjectTextplaceholder.textColor = UIColorFromRGBA(0x999999, 1);
//            subjectTextplaceholder.text = @"请输入投稿内容";
//            subjectTextplaceholder.font = Font(15);
//            [subjectText addSubview:subjectTextplaceholder];
//        }
//    }
//    mainScrollView.contentSize = CGSizeMake(0, CGRectGetMaxY(headImageV.frame) +24 +400);
    
}

- (void)photoAction{
    [self.view endEditing:YES];
    UIAlertController *alertController  = \
    [UIAlertController alertControllerWithTitle:@""
                                        message:@"上传照片"
                                 preferredStyle:UIAlertControllerStyleActionSheet];
    
    UIAlertAction *photoAction  = \
    [UIAlertAction actionWithTitle:@"从相册选择"
                             style:UIAlertActionStyleDefault
                           handler:^(UIAlertAction * _Nonnull action) {
                               
                               NSLog(@"从相册选择");
                               UIImagePickerController *imagePicker = [[UIImagePickerController alloc] init];
                               imagePicker.delegate = self;
                               imagePicker.sourceType    = UIImagePickerControllerSourceTypePhotoLibrary;
                               imagePicker.mediaTypes = @[(NSString *)kUTTypeImage];
                               imagePicker.allowsEditing = YES;
                               
                               [self presentViewController:imagePicker
                                                  animated:YES
                                                completion:nil];
                               
                           }];
    
    UIAlertAction *cameraAction = \
    [UIAlertAction actionWithTitle:@"拍照"
                             style:UIAlertActionStyleDefault
                           handler:^(UIAlertAction * _Nonnull action) {
                               
                               NSLog(@"拍照");
                               if ([UIImagePickerController isSourceTypeAvailable:UIImagePickerControllerSourceTypeCamera]) {
                                   UIImagePickerController *imagePicker = [[UIImagePickerController alloc] init];
                                   imagePicker.delegate = self;
                                   imagePicker.sourceType        = UIImagePickerControllerSourceTypeCamera;
                                   imagePicker.cameraCaptureMode = UIImagePickerControllerCameraCaptureModePhoto;
                                   imagePicker.cameraDevice      = UIImagePickerControllerCameraDeviceRear;
                                   imagePicker.allowsEditing     = YES;
                                   
                                   [self presentViewController:imagePicker
                                                      animated:YES
                                                    completion:nil];
                               }
                           }];
    
    UIAlertAction *cancelAction = \
    [UIAlertAction actionWithTitle:@"取消"
                             style:UIAlertActionStyleCancel
                           handler:^(UIAlertAction * _Nonnull action) {
                               
                               NSLog(@"取消");
                           }];
    
    [alertController addAction:photoAction];
    [alertController addAction:cameraAction];
    [alertController addAction:cancelAction];
    [self presentViewController:alertController animated:YES completion:nil];
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
    if ([changeL.text isEqualToString:@"— 请选择 —"]){
        [self showError:@"请选择入党时间"];
        return;
    }else if (subjectText.text.length ==0){
        [self showError:@"请输入投稿内容"];
        return;
    }else if (CompanyText.text.length ==0){
        [self showError:@"请输入你所在部门"];
        return;
    }else if (photoStr.length == 0){
        [self showError:@"请上传自拍照片"];
        return;
    }
    [self showHUD:nil];
    WEAKSELF
    NSDictionary *biz = @{@"rudang_time":upTimeStr,@"content":subjectText.text,@"take":photoStr,@"department":CompanyText.text};
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

- (void)cancelPhoto{
    
    PhotoV.image =[ UIImage imageNamed:@"contribute_camera"];
    cancelB.hidden = YES;
}

- (void)changeAction{
    [self.view endEditing:YES];
    WSDatePickerView *datepicker = [[WSDatePickerView alloc] initWithDateStyle:DateStyleShowYearMonth CompleteBlock:^(NSDate *selectDate) {
        timeStr = [selectDate stringWithFormat:@"yyyy年MM月"];
        upTimeStr = [selectDate stringWithFormat:@"yyyy-MM"];
        changeL.text = timeStr;
        changeL.textColor = UIColorFromRGBA(0x333333, 1);
    }];
    [datepicker show];
//    [self.view endEditing:YES];
//    [CGXPickerView showStringPickerWithTitle:@"稿件分类" DataSource:[titleArr copy] DefaultSelValue:titleArr[0] IsAutoSelect:NO ResultBlock:^(id selectValue, id selectRow) {
//        NSLog(@"%@",selectValue);
//        changeL.text = selectValue;
//    }];
}

#pragma 拍照选择照片协议方法
-(void)imagePickerController:(UIImagePickerController *)picker didFinishPickingMediaWithInfo:(NSDictionary *)info
{
    
    [self showHUD:@"上传照片中..."];
    [picker dismissViewControllerAnimated:YES completion:^{}];
    UIImage *image = [info objectForKey:UIImagePickerControllerOriginalImage];
    [self passImage:image];
    
}


- (void)passImage:(UIImage *)image{
    [[QiNiuPhotoUpLoad sharedManager] UpLoadImage:image completion:^(NSURLSessionDataTask *task, NSDictionary *dict, NSError *error) {
        [self hideHUD];
        if (dict) {
            if(dict[@"photo"]){
            photoStr = dict[@"photo"];
            [PhotoV sd_setImageWithURL:[NSURL URLWithString:photoStr]];
            cancelB.hidden = NO;
        }
        }
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
