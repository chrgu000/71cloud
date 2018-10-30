//
//  Me_InformationViewController.m
//  TheParty
//
//  Created by macmini on 2018/8/17.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "Me_InformationViewController.h"
#import "QiNiuPhotoUpLoad.h"
#import <AVFoundation/AVFoundation.h>
#import "CustomAlertView.h"
@interface Me_InformationViewController ()<UIActionSheetDelegate,UIImagePickerControllerDelegate,UINavigationControllerDelegate>
{
    UIImageView *UserV;
    UILabel *nameL;
    UILabel *companyL;
    
}
@end

@implementation Me_InformationViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    self.title = @"个人信息";
    self.view.backgroundColor = COLOR(249, 245, 245);
    [self createUI];
}

- (void)createUI{
    NSArray *arr = @[@"头像",@"用户名",@"公司名称"];
    
    for (int i = 0; i<3; i++) {
        UIView *backV = [[UIView alloc] initWithFrame:CGRectMake(0, 20, SCREEN_W, 52)];
        backV.backgroundColor = [UIColor whiteColor];
        backV.tag = i;
        backV.userInteractionEnabled = YES;
        [self.view addSubview:backV];
        
        UILabel *leftLabel = [[UILabel alloc] initWithFrame:CGRectMake(16, 0, 80, 52)];
        leftLabel.text = arr[i];
        leftLabel.textColor = UIColorFromRGBA(0x4d4c4c, 1);
        leftLabel.font = Font(15);
        [backV addSubview:leftLabel];
        
        UIImageView *rightV = [[UIImageView alloc] initWithFrame:CGRectMake(SCREEN_W - 23, 18.5, 7, 13)];
        rightV.image = [UIImage imageNamed:@"me_right"];
        [backV addSubview:rightV];
        
        UILabel *rightL = [[UILabel alloc] initWithFrame:CGRectMake(96, 0, SCREEN_W - 130, 52)];
        rightL.textAlignment = 2;
        rightL.textColor = UIColorFromRGBA(0xcbcbcb, 1);
        rightL.font = Font(13);
        [backV addSubview:rightL];
        
        if (i == 0) {
            backV.frame = CGRectMake(0, 20, SCREEN_W, 75);
            rightV.frame = CGRectMake(SCREEN_W - 23, 31, 7, 13);
            rightL.hidden = YES;
            leftLabel.frame = CGRectMake(16, 0, 80, 75);
            UserV = [[UIImageView alloc] initWithFrame:CGRectMake(SCREEN_W - 23 -64, 10.5, 54, 54)];
            [UserV sd_setImageWithURL:[NSURL URLWithString:self.DataDic[@"user"][@"face"]] placeholderImage:[UIImage imageNamed:@"me_user"]];
            UserV.layer.masksToBounds = YES;
            UserV.layer.cornerRadius = 27;
            [backV addSubview:UserV];
            
        }else if (i==1){
            backV.frame = CGRectMake(0, 105, SCREEN_W, 52);
            nameL = rightL;
            nameL.text =  self.DataDic[@"user"][@"username"];
        }else{
            backV.frame = CGRectMake(0, 158, SCREEN_W, 52);
            companyL = rightL;
            companyL.text =  self.DataDic[@"user"][@"company"];
        }
        UITapGestureRecognizer *tap = [[UITapGestureRecognizer alloc] initWithTarget:self action:@selector(action:)];
        [backV addGestureRecognizer:tap];
    }
    
}

- (void)action:(UITapGestureRecognizer *)sender{
    
    if (sender.view.tag == 0) {
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
    }else if (sender.view.tag == 1){
        
        CustomAlertView *nameV = [[CustomAlertView alloc] initWithNameViewHeight:200 andstr:@"修改用户名"];
        nameV.NameButtonClick = ^void(NSString*nameText){
              [self createType:1 andstr:nameText];
        };
        
    }else{
        CustomAlertView *nameV = [[CustomAlertView alloc] initWithNameViewHeight:200 andstr:@"修改公司名"];
        nameV.NameButtonClick = ^void(NSString*nameText){
         
              [self createType:2 andstr:nameText];
        };
    }
    
}

#pragma 拍照选择照片协议方法
-(void)imagePickerController:(UIImagePickerController *)picker didFinishPickingMediaWithInfo:(NSDictionary *)info
{
    [self showHUD:@"上传附件中..."];
    [picker dismissViewControllerAnimated:YES completion:^{}];
    UIImage *image = [info objectForKey:UIImagePickerControllerOriginalImage];
    [self passImage:image];
}


- (void)passImage:(UIImage *)image{
    [[QiNiuPhotoUpLoad sharedManager] UpLoadImage:image completion:^(NSURLSessionDataTask *task, NSDictionary *dict, NSError *error) {
        [self hideHUD];
        if (dict) {
            [self createType:3 andstr:dict[@"photo"]];
        }
    }];
}

- (void) createType:(NSInteger )typeN andstr:(NSString *)str{
    [self showHUD:nil];
    WEAKSELF
    NSDictionary *biz;
    if (typeN == 1) {
         biz = @{@"type":@(1),@"username":str};
    }else if(typeN == 2){
         biz = @{@"type":@(2),@"company":str};
    }else{
         biz = @{@"type":@(3),@"face":str};
    }
    [ConnectionRequestMgr POSTSessionWithUrl:UserEdit parameter:biz successBlock:^(NSDictionary *dict) {
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            [weakSelf showSuccess:@"提交成功！"];
            if (typeN == 1) {
                nameL.text = str;
            }else if(typeN == 2){
                companyL.text = str;
            }else if(typeN == 3){
              [UserV sd_setImageWithURL:[NSURL URLWithString:str] placeholderImage:[UIImage imageNamed:@"me_user"]];
            }
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
