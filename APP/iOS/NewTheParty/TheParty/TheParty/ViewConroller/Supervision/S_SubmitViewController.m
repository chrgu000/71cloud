//
//  S_SubmitViewController.m
//  TheParty
//
//  Created by macmini on 2018/8/6.
//  Copyright © 2018年 macmini. All rights reserved.
//

#import "S_SubmitViewController.h"
#import "S_complantViewController.h"
#import "QiNiuPhotoUpLoad.h"
#import <AVFoundation/AVFoundation.h>
#import <AssetsLibrary/AssetsLibrary.h>
#import "PhotoDetailCollectionViewCell.h"
@interface S_SubmitViewController ()<UIScrollViewDelegate,UITextFieldDelegate,UITextViewDelegate,UIActionSheetDelegate,UIImagePickerControllerDelegate,UINavigationControllerDelegate,UICollectionViewDelegate, UICollectionViewDataSource,UICollectionViewDelegateFlowLayout>
{
    UIScrollView *mainScroll;
    UITextField *titleText;
    UITextView *subjectText;
    UILabel *subjectPloar;
    
    UITextField *companyText;
    UITextField *modelText;
    UITextField *jibieText;
    
    UIView *downView;
    UILabel *downL;
    UIButton *sureB;
    
    NSMutableArray *photoArr;
    NSMutableArray *vedioArr;
    UICollectionView *PhotoCollection;
    UICollectionView *VedioCollection;
}
@end

@implementation S_SubmitViewController

- (void)viewDidLoad {
    [super viewDidLoad];
    self.title = @"举报";
    photoArr = [[NSMutableArray alloc] init];
    vedioArr = [[NSMutableArray alloc] init];
    mainScroll = [[UIScrollView alloc] initWithFrame:CGRectMake(0, 0, SCREEN_W, SCREEN_H -64)];
    mainScroll.delegate = self;
    mainScroll.userInteractionEnabled =YES;
    mainScroll.showsVerticalScrollIndicator = false;
    mainScroll.showsHorizontalScrollIndicator = false;
    UIImage*img =[UIImage imageNamed:@"jubao_tijiaoB"];
    [mainScroll setBackgroundColor:[UIColor colorWithPatternImage:img]];
    [self.view addSubview:mainScroll];
    [self creatUI];
}

- (void)creatUI{
    
    NSArray *titleArr = @[@"问题类别:",@"举报标题:",@"举报内容:",@"问题所属公司:",@"被反映对象:",@"职级:",@"图片上传"];
    NSArray *ploarArr = @[@"问题类别:",@"请输入举报标题",@"20字以上，500字以内",@"请输入问题所属公司",@"请输入被反映部门名称",@"请输入职级",@""];
    for (int i = 0; i<7; i++) {
        UIView *backV = [[UIView alloc] initWithFrame:CGRectMake(16,  208+ i*56, SCREEN_W -32, 46)];
        backV.backgroundColor = [UIColor whiteColor];
        backV.layer.cornerRadius = 11;
        backV.layer.borderWidth = 1;
        backV.layer.borderColor = UIColorFromRGBA(0xF5F5F5, 1).CGColor;
        [mainScroll addSubview:backV];
        
        UILabel *left = [[UILabel alloc] initWithFrame:CGRectMake(14, 15, 105, 16)];
        left.text = titleArr[i];
        left.textColor = UIColorFromRGBA(0x333333, 1);
        left.font = Font(16);
        [backV addSubview:left];

        UITextField *tf = [[UITextField alloc] initWithFrame:CGRectMake(CGRectGetMaxX(left.frame) +5, 15, SCREEN_W - (CGRectGetMaxX(left.frame) +5 + 32), 20)];
        tf.placeholder = ploarArr[i];
        tf.textColor = UIColorFromRGBA(0x333333, 1);;
        [tf setValue:UIColorFromRGBA(0x999999, 1) forKeyPath:@"_placeholderLabel.textColor"];
        tf.font = Font(16);
        [backV addSubview:tf];
        
        if (i == 0) {
            UILabel *title =[[UILabel alloc] initWithFrame:CGRectMake(CGRectGetMaxX(left.frame) +5, 0, SCREEN_W - (CGRectGetMaxX(left.frame) +5 + 32),46)];
            title.text = @"公款大吃大喝";
            title.textColor = UIColorFromRGBA(0x333333, 1);
            title.font = Font(16);
            [backV addSubview:title];
            tf.hidden = YES;
        }else if (i ==1){
            titleText = tf;
        }else if (i ==2){
            backV.frame = CGRectMake(16,  208+ i*56, SCREEN_W -32, 176);
            tf.hidden = YES;
            
            subjectText = [[UITextView alloc] initWithFrame:CGRectMake(CGRectGetMaxX(left.frame) +5, 8, SCREEN_W - (CGRectGetMaxX(left.frame) +5 + 32), 166)];
            subjectText.delegate = self;
            subjectText.textColor = UIColorFromRGBA(0x333333, 1);
            subjectText.font = Font(16);
            [backV addSubview:subjectText];
            
             subjectPloar= [[UILabel alloc] initWithFrame:CGRectMake(0, 10,200, 15)];
            subjectPloar.textColor = UIColorFromRGBA(0x999999, 1);
            subjectPloar.text = @"20字以上，500字以内";
            subjectPloar.font = Font(15);
            [subjectText addSubview:subjectPloar];
            
            
        }else if (i ==3){
            backV.frame = CGRectMake(16,  208+ i*56 + 130, SCREEN_W -32, 46);
            companyText = tf;
        }else if (i ==4){
            backV.frame = CGRectMake(16,  208+ i*56 + 130, SCREEN_W -32, 46);
            modelText = tf;
        }else if (i ==5){
            backV.frame = CGRectMake(16,  208+ i*56 + 130, SCREEN_W -32, 46);
            jibieText = tf;
        }else{
            backV.frame = CGRectMake(16,  208+ i*56 + 130, SCREEN_W -32, 46);
            tf.hidden = YES;
            
            UIButton *button = [UIButton buttonWithType:UIButtonTypeCustom];
            button.frame =CGRectMake(SCREEN_W - 32 -120, 7.5, 110, 31);
            [button setTitle:@"添加附件" forState:UIControlStateNormal];
            [button setTitleColor:[UIColor whiteColor] forState:UIControlStateNormal];
            button.backgroundColor = [UIColor redColor];
            button.titleLabel.font = Font(15);
            button.layer.masksToBounds = YES;
            button.layer.cornerRadius = 8;
            button.tag = 1;
            [button addTarget:self action:@selector(photoUpload:) forControlEvents:UIControlEventTouchUpInside];
            [backV addSubview:button];
        }
    }

    downView = [[UIView alloc] initWithFrame:CGRectMake(16,  208+ 7*56 + 130, SCREEN_W -32, 46)];
    downView.backgroundColor = [UIColor whiteColor];
    downView.layer.cornerRadius = 11;
    downView.layer.borderWidth = 1;
    downView.layer.borderColor = UIColorFromRGBA(0xF5F5F5, 1).CGColor;
    [mainScroll addSubview:downView];
    
    UILabel *left = [[UILabel alloc] initWithFrame:CGRectMake(14, 15, 105, 16)];
    left.text = @"视频上传:";
    left.textColor = UIColorFromRGBA(0x333333, 1);
    left.font = Font(16);
    [downView addSubview:left];
    
    UIButton *button = [UIButton buttonWithType:UIButtonTypeCustom];
    button.frame =CGRectMake(SCREEN_W - 32 -120, 7.5, 110, 31);
    [button setTitle:@"添加附件" forState:UIControlStateNormal];
    [button setTitleColor:[UIColor whiteColor] forState:UIControlStateNormal];
    button.backgroundColor = [UIColor redColor];
    button.titleLabel.font = Font(15);
    button.layer.masksToBounds = YES;
    button.layer.cornerRadius = 8;
    button.tag = 2;
    [button addTarget:self action:@selector(photoUpload:) forControlEvents:UIControlEventTouchUpInside];
    [downView addSubview:button];
    
    
    downL = [[UILabel alloc] initWithFrame:CGRectMake(16, CGRectGetMaxY(downView.frame) + 10, SCREEN_W -32, 32)];
    downL.numberOfLines = 2;
    downL.textColor = UIColorFromRGBA(0x666666, 1);
    downL.font = Font(12);
    
    NSMutableAttributedString *str = [[NSMutableAttributedString alloc] initWithString:@"温馨提示：最多上传4个附件，仅限图片或视频，每个附件大小不超过5M。"];
    NSRange range1 = [[str string] rangeOfString:@"温馨提示"];
    [str addAttribute:NSForegroundColorAttributeName value:[UIColor redColor] range:range1];
    downL.attributedText = str;
    [mainScroll addSubview:downL];
    
    sureB = [UIButton buttonWithType:UIButtonTypeCustom];
    sureB.frame =CGRectMake(52, CGRectGetMaxY(downL.frame) + 31, SCREEN_W - 104, 46);
    [sureB setTitle:@"提交" forState:UIControlStateNormal];
    [sureB setTitleColor:[UIColor whiteColor] forState:UIControlStateNormal];
    sureB.backgroundColor = [UIColor redColor];
    sureB.titleLabel.font = Font(18);
    sureB.layer.masksToBounds = YES;
    sureB.layer.cornerRadius = 11;
    [sureB addTarget:self action:@selector(sureAction) forControlEvents:UIControlEventTouchUpInside];
    [mainScroll addSubview:sureB];
    
    UIImageView *TopV = [[UIImageView alloc] initWithFrame:CGRectMake(SCREEN_W - 288,95 , 288, 142)];
    TopV.image = [UIImage imageNamed:@"jubao_top2"];
    [mainScroll addSubview:TopV];
    
    mainScroll.contentSize = CGSizeMake(0, CGRectGetMaxY(sureB.frame) + 50);
}

-(void)cgreatPhotoCollection{
    UICollectionViewFlowLayout *layoutPhoto=[[UICollectionViewFlowLayout alloc]init];
    layoutPhoto.minimumInteritemSpacing = 16;
    layoutPhoto.itemSize=CGSizeMake((SCREEN_W - 96)/4, (SCREEN_W - 96)/4);  //设置每个单元格的大小
    
    PhotoCollection = [[UICollectionView alloc] initWithFrame:CGRectMake(16, 208+ 7*56 + 130, SCREEN_W -32, (SCREEN_W - 96)/4) collectionViewLayout:layoutPhoto];
    PhotoCollection.backgroundColor = [UIColor clearColor];
    PhotoCollection.delegate=self;
    PhotoCollection.dataSource=self;
    PhotoCollection.showsVerticalScrollIndicator = FALSE;
    PhotoCollection.showsHorizontalScrollIndicator = FALSE;
    [mainScroll addSubview:PhotoCollection];
    
    [PhotoCollection registerNib:[UINib nibWithNibName:@"PhotoDetailCollectionViewCell" bundle:nil] forCellWithReuseIdentifier:@"PhotoDetailCollectionViewCell"];
    if (vedioArr.count == 0) {
        downView.frame = CGRectMake(16, CGRectGetMaxY(PhotoCollection.frame) + 10, SCREEN_W -32, 46);
        downL.frame = CGRectMake(16, CGRectGetMaxY(downView.frame) + 10, SCREEN_W -32, 32);
        sureB.frame = CGRectMake(52, CGRectGetMaxY(downL.frame) + 31, SCREEN_W - 104, 46);
    }else{
        downView.frame = CGRectMake(16, CGRectGetMaxY(PhotoCollection.frame) + 10, SCREEN_W -32, 46);
        VedioCollection.frame = CGRectMake(16, CGRectGetMaxY(downView.frame) + 10, SCREEN_W - 32, (SCREEN_W - 96)/4);
        downL.frame = CGRectMake(16, CGRectGetMaxY(VedioCollection.frame) + 10, SCREEN_W -32, 32);
        sureB.frame = CGRectMake(52, CGRectGetMaxY(downL.frame) + 31, SCREEN_W - 104, 46);
    }
     mainScroll.contentSize = CGSizeMake(0, CGRectGetMaxY(sureB.frame) + 50);
}

-(void)cgreatVedioCollection{
    UICollectionViewFlowLayout *layout=[[UICollectionViewFlowLayout alloc]init];
    layout.minimumInteritemSpacing = 16;
    layout.itemSize=CGSizeMake((SCREEN_W - 96)/4, (SCREEN_W - 96)/4);  //设置每个单元格的大小
    
    VedioCollection = [[UICollectionView alloc] initWithFrame:CGRectMake(16, CGRectGetMaxY(downView.frame) + 10, SCREEN_W - 32, (SCREEN_W - 96)/4) collectionViewLayout:layout];
    VedioCollection.backgroundColor = [UIColor clearColor];
    VedioCollection.delegate=self;
    VedioCollection.dataSource=self;
    VedioCollection.showsVerticalScrollIndicator = FALSE;
    VedioCollection.showsHorizontalScrollIndicator = FALSE;
    [mainScroll addSubview:VedioCollection];
    
    [VedioCollection registerNib:[UINib nibWithNibName:@"PhotoDetailCollectionViewCell" bundle:nil] forCellWithReuseIdentifier:@"PhotoDetailCollectionViewCell"];
    
    downL.frame = CGRectMake(16, CGRectGetMaxY(VedioCollection.frame) + 10, SCREEN_W -32, 32);
    sureB.frame = CGRectMake(52, CGRectGetMaxY(downL.frame) + 31, SCREEN_W - 104, 46);
    mainScroll.contentSize = CGSizeMake(0, CGRectGetMaxY(sureB.frame) + 50);
}

- (void)photoUpload:(UIButton *)sender{
    
    if (sender.tag == 1) {
        if (photoArr.count == 4) {
            [self showError:@"最多只能传4张图片！"];
        }else{
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
    }else{
        if (vedioArr.count == 4) {
            [self showError:@"最多只能传4个视频！"];
        }else{
        UIAlertController *alertController = \
        [UIAlertController alertControllerWithTitle:@""
                                            message:@"上传视频"
                                     preferredStyle:UIAlertControllerStyleActionSheet];
        
        UIAlertAction *photoAction = \
        [UIAlertAction actionWithTitle:@"从视频库选择"
                                 style:UIAlertActionStyleDefault
                               handler:^(UIAlertAction * _Nonnull action) {
                                   NSLog(@"从视频库选择");
                                   UIImagePickerController *imagePicker = [[UIImagePickerController alloc] init];
                                   imagePicker.sourceType = UIImagePickerControllerSourceTypePhotoLibrary;
                                   imagePicker.delegate = self;
                                   imagePicker.mediaTypes = @[(NSString *)kUTTypeMovie];
                                   imagePicker.allowsEditing = NO;
                                   
                                   [self presentViewController:imagePicker animated:YES completion:nil];
                               }];
        
        UIAlertAction *cameraAction = \
        [UIAlertAction actionWithTitle:@"录像"
                                 style:UIAlertActionStyleDefault
                               handler:^(UIAlertAction * _Nonnull action) {
                                   
                                   NSLog(@"录像");
                                   UIImagePickerController *imagePicker = [[UIImagePickerController alloc] init];
                                   imagePicker.delegate = self;
                                   imagePicker.sourceType = UIImagePickerControllerSourceTypeCamera;
                                   imagePicker.cameraDevice = UIImagePickerControllerCameraDeviceRear;
                                   imagePicker.mediaTypes = [UIImagePickerController availableMediaTypesForSourceType:UIImagePickerControllerSourceTypeCamera];
                                   imagePicker.videoQuality = UIImagePickerControllerQualityType640x480;
                                   imagePicker.cameraCaptureMode = UIImagePickerControllerCameraCaptureModeVideo;
                                   imagePicker.allowsEditing = YES;
                                   
                                   [self presentViewController:imagePicker animated:YES completion:nil];
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
    }
}

- (void)sureAction{
    if (titleText.text.length ==0) {
        [self showError:@"请输入举报标题！"];
        return;
    }else if (subjectText.text.length == 0){
        [self showError:@"请输入举报内容!"];
        return;
    }else if (companyText.text.length == 0 ){
        [self showError:@"请输入所属公司!"];
        return;
    }else if (modelText.text.length == 0){
        [self showError:@"请输入反映对象"];
        return;
    }else if (jibieText.text.length == 0){
        [self showError:@"请输入职级"];
        return;
    }
    [self showHUD:nil];
    WEAKSELF
    NSDictionary *biz;
    NSMutableString *photoStr = [[NSMutableString alloc] init];
    NSMutableString *vedioStr = [[NSMutableString alloc] init];
    for (NSString *key in photoArr) {
        [photoStr appendFormat:@"%@#",key];
    }
    for (NSString *key in vedioArr) {
        [vedioStr appendFormat:@"%@#",key];
    }
    NSLog(@"----%@ -----%@",photoStr,vedioStr);
    if (vedioArr.count >0||photoArr.count>0) {
        if (vedioArr.count >0 &&photoArr.count == 0) {
            biz = @{@"title":titleText.text,@"belong_company":companyText.text,@"content":subjectText.text,@"belong_dept":modelText.text,@"rank":jibieText.text,@"question_type":self.type,@"video":vedioStr};
        }else if (vedioArr.count == 0 && photoArr.count > 0){
            biz = @{@"title":titleText.text,@"belong_company":companyText.text,@"content":subjectText.text,@"belong_dept":modelText.text,@"rank":jibieText.text,@"question_type":self.type,@"img":photoStr};
        }else{
            biz = @{@"title":titleText.text,@"belong_company":companyText.text,@"content":subjectText.text,@"belong_dept":modelText.text,@"rank":jibieText.text,@"question_type":self.type,@"img":photoStr,@"video":vedioStr};
        }
    }else{
            biz = @{@"title":titleText.text,@"belong_company":companyText.text,@"content":subjectText.text,@"belong_dept":modelText.text,@"rank":jibieText.text,@"question_type":self.type};
    }
    [ConnectionRequestMgr POSTSessionWithUrl:Report parameter:biz successBlock:^(NSDictionary *dict) {
        [weakSelf hideHUD];
        if ([dict[@"code"] integerValue] == 1) {
            [weakSelf showSuccess:@"投稿成功！"];
            [[UIHelper sharedSingleton] pushVC:@"S_complantViewController" vc:self parames:nil];
        }else{
            [weakSelf showError:dict[@"msg"]];
        }
    } failBlock:^(NSString *errorStr) {
        [weakSelf hideHUD];
        [weakSelf showError:errorStr];
    }];
}

#pragma mark UITextViewDelegate
- (BOOL)textView:(UITextView *)textView shouldChangeTextInRange:(NSRange)range replacementText:(NSString *)text
{
    if (![text isEqualToString:@""])
    {
        subjectPloar.hidden = YES;
    }
    if ([text isEqualToString:@""] && range.location == 0 && range.length == 1)
    {
        subjectPloar.hidden = NO;
    }
    return YES;
}


#pragma 拍照选择照片协议方法
-(void)imagePickerController:(UIImagePickerController *)picker didFinishPickingMediaWithInfo:(NSDictionary *)info
{
     [self showHUD:@"上传附件中..."];
    [picker dismissViewControllerAnimated:YES completion:^{}];
    NSString* type = [info objectForKey:UIImagePickerControllerMediaType];
    if([type isEqualToString:(NSString*)kUTTypeImage]) {
        NSLog(@"相册");
        UIImage *image = [info objectForKey:UIImagePickerControllerOriginalImage];
        [self passImage:image];
    }else{
        NSURL *videoURL = [info objectForKey:UIImagePickerControllerMediaURL];
        NSString *path = [[NSSearchPathForDirectoriesInDomains(NSDocumentDirectory, NSUserDomainMask, true) lastObject] stringByAppendingPathComponent:[NSString stringWithFormat:@"%ld_compressedVideo.mp4",time(NULL)]];
        NSLog(@"compressedVideoSavePath : %@",path);
        //压缩
        AVURLAsset *avAsset = [[AVURLAsset alloc] initWithURL:videoURL options:nil];
        NSArray *compatiblePresets = [AVAssetExportSession exportPresetsCompatibleWithAsset:avAsset];
        if ([compatiblePresets containsObject:AVAssetExportPresetHighestQuality]) {
            AVAssetExportSession *exportSession = [[AVAssetExportSession alloc] initWithAsset:avAsset presetName:AVAssetExportPreset640x480];
            //输出URL
            exportSession.outputURL = [NSURL fileURLWithPath:path];
            //优化网络
            exportSession.shouldOptimizeForNetworkUse = true;
            //转换后的格式
            exportSession.outputFileType = AVFileTypeMPEG4;
            //异步导出
            [exportSession exportAsynchronouslyWithCompletionHandler:^{
                // 如果导出的状态为完成
                if ([exportSession status] == AVAssetExportSessionStatusCompleted) {
                    [self saveVideo:[NSURL fileURLWithPath:path]];
                    NSLog(@"压缩完毕,压缩后大小 %f MB",[self fileSize:[NSURL fileURLWithPath:path]]);
                }else{
                    NSLog(@"当前压缩进度:%f",exportSession.progress);
                }
                NSLog(@"%@",exportSession.error);
                
            }];
        }
    }
    
}

- (void)passImage:(UIImage *)image{
    [[QiNiuPhotoUpLoad sharedManager] UpLoadImage:image completion:^(NSURLSessionDataTask *task, NSDictionary *dict, NSError *error) {
        [self hideHUD];
        if (dict) {
            [photoArr addObject:dict[@"photo"]];
            [self cgreatPhotoCollection];
            [PhotoCollection reloadData];
        }
    }];    
}

- (void)saveVideo:(NSURL *)outputFileURL
{
    
   
    [[QiNiuPhotoUpLoad sharedManager] UpLoadVedio:outputFileURL completion:^(NSURLSessionDataTask *task, NSDictionary *dict, NSError *error) {
        [self hideHUD];
        if (dict) {
            [vedioArr addObject:dict[@"photo"]];
            [self cgreatVedioCollection];
            [VedioCollection reloadData];
        }
    }];
}

- (CGFloat)fileSize:(NSURL *)path
{
    return [[NSData dataWithContentsOfURL:path] length]/1024.00 /1024.00;
}


#pragma mark - UICollectionViewDataSource
- (NSInteger)collectionView:(UICollectionView *)collectionView numberOfItemsInSection:(NSInteger)section{
    if (collectionView == PhotoCollection) {
        return photoArr.count;
    }else{
        return vedioArr.count;
    }
}

- ( UICollectionViewCell *)collectionView:(UICollectionView *)collectionView cellForItemAtIndexPath:(NSIndexPath *)indexPath{
    PhotoDetailCollectionViewCell *cell = [collectionView dequeueReusableCellWithReuseIdentifier:@"PhotoDetailCollectionViewCell" forIndexPath:indexPath];
     if (collectionView == PhotoCollection) {
         [cell.imageV sd_setImageWithURL:[NSURL URLWithString:photoArr[indexPath.row]] placeholderImage:[UIImage imageNamed:@"photoLoading"]];
     }else{
         cell.imageV.image = [UIImage imageNamed:@"vedio_mo"];
     }
    return cell;
}

#pragma mark - UICollectionViewDelegateFlowLayout
- (CGFloat)collectionView:(UICollectionView *)collectionView layout:(UICollectionViewLayout*)collectionViewLayout minimumLineSpacingForSectionAtIndex:(NSInteger)section{
    return 0.f;
}

- (CGFloat)collectionView:(UICollectionView *)collectionView layout:(UICollectionViewLayout*)collectionViewLayout minimumInteritemSpacingForSectionAtIndex:(NSInteger)section{
    return 0.f;
}

- (UIEdgeInsets)collectionView:(UICollectionView *)collectionView layout:(UICollectionViewLayout*)collectionViewLayout insetForSectionAtIndex:(NSInteger)section{
    return UIEdgeInsetsMake(0,0,0,0);
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
