# Waymo Open Dataset README

## Overview

The Waymo Open Dataset is a collection of data provided by Waymo, containing high-quality sensor data from self-driving vehicles. This README provides an overview of the dataset's contents, structure, and how to access it for research and development purposes.
For this I used waymo_mini which can be downloaded at [https://mmdetection3d.readthedocs.io/en/latest/user_guides/dataset_prepare.html]
## Dataset Structure

The dataset is organized into the following directories:

- `training/`: Contains training data segments in TFRecord format.
- `validation/`: Contains validation data segments in TFRecord format.
- `testing/`: Contains testing data segments in TFRecord format.
- `metadata/`: Contains metadata files such as sensor calibration data and object categories.
- `README.md`: This README file providing an overview of the dataset.

## Accessing the Data

To access the data, follow these steps:

1. Clone or download the Waymo Open Dataset from the official repository.
2. Install TensorFlow and the Waymo Open Dataset API.
3. Use TensorFlow's TFRecordDataset to read the TFRecord files containing the data.

Here's a code snippet to get you started:

```python
import tensorflow as tf
import waymo_open_dataset.dataset_pb2 as open_dataset

# Example path to a TFRecord file
tfrecord_file = 'path/to/segment-0001.tfrecord'

# Create a dataset from the TFRecord file
dataset = tf.data.TFRecordDataset(tfrecord_file)

# Iterate through the dataset
for data in dataset:
    frame = open_dataset.Frame()
    frame.ParseFromString(data.numpy())
    
    # Access and process the frame data here
    ...
```
## Website

To read more about the dataset and access it, please visit [https://www.waymo.com/open](https://www.waymo.com/open).

## Citation

### for Perception dataset
@InProceedings{Sun_2020_CVPR,
  author = {Sun, Pei and Kretzschmar, Henrik and Dotiwalla, Xerxes and Chouard, Aurelien and Patnaik, Vijaysai and Tsui, Paul and Guo, James and Zhou, Yin and Chai, Yuning and Caine, Benjamin and Vasudevan, Vijay and Han, Wei and Ngiam, Jiquan and Zhao, Hang and Timofeev, Aleksei and Ettinger, Scott and Krivokon, Maxim and Gao, Amy and Joshi, Aditya and Zhang, Yu and Shlens, Jonathon and Chen, Zhifeng and Anguelov, Dragomir},
  title = {Scalability in Perception for Autonomous Driving: Waymo Open Dataset},
  booktitle = {Proceedings of the IEEE/CVF Conference on Computer Vision and Pattern Recognition (CVPR)},
  month = {June},
  year = {2020}
}

### for Motion dataset
@InProceedings{Ettinger_2021_ICCV,
  author={Ettinger, Scott and Cheng, Shuyang and Caine, Benjamin and Liu, Chenxi and Zhao, Hang and Pradhan, Sabeek and Chai, Yuning and Sapp, Ben and Qi, Charles R. and Zhou, Yin and Yang, Zoey and Chouard, Aur\'elien and Sun, Pei and Ngiam, Jiquan and Vasudevan, Vijay and McCauley, Alexander and Shlens, Jonathon and Anguelov, Dragomir},
  title={Large Scale Interactive Motion Forecasting for Autonomous Driving: The Waymo Open Motion Dataset},
  booktitle= Proceedings of the IEEE/CVF International Conference on Computer Vision (ICCV)},
  month={October},
  year={2021},
  pages={9710-9719}
}

@InProceedings{Kan_2024_icra,
  author={Chen, Kan and Ge, Runzhou and Qiu, Hang and Ai-Rfou, Rami and Qi, Charles R. and Zhou, Xuanyu and Yang, Zoey and Ettinger, Scott and Sun, Pei and Leng, Zhaoqi and Mustafa, Mustafa and Bogun, Ivan and Wang, Weiyue and Tan, Mingxing and Anguelov, Dragomir},
  title={WOMD-LiDAR: Raw Sensor Dataset Benchmark for Motion Forecasting},
  month={May},
  booktitle= Proceedings of the IEEE International Conference on Robotics and Automation (ICRA)},
  year={2024}
}
