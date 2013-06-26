using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace FMSClassLibrary
{

    public class UserInfo
    {
        public string userId;
        public string userName;
        public List< StorageDeviceInfo> deviceOwned;        
        public List<FileInfo> files;
    }

    public class FileBackupInfo
    {
        public string backupId;
        public DateTime backupDate;
        public List< HostAppDeviceInfo > usedHosts;
        public List< StorageDeviceInfo >sourceDevices;
        public List<FileInfo> files;
    }

    public class FileStreamInfo
    {
        public string streamId;
        public DateTime streamDate;
        public HostAppDeviceInfo usedHost;
        public StorageDeviceInfo sourceDevice;
        public string destinationIP;
        public List<FileInfo> files;
    }

    public class StorageDeviceInfo
    {
        public string deviceId;
        public DateTime lastScannedDate;
        public HostAppDeviceInfo lastUsedHost;
        public List<FileInfo> files;
        public List<FileBackupInfo> filesBackupHere;
    }
    public enum HostAppType
    {
        Android,
        Win8,
        Win7,
        ubuntu
    }
    public class HostAppDeviceInfo
    {
        public string hostDeviceId;
        public List<StorageDeviceInfo> storageDevicesAttached;
        public List<FileStreamInfo> filesStreamed;
        public HostAppType type;
    }

    public class FileInfo
    {
        public string fileName;
        public string filePath;
        public StorageDeviceInfo device;
        public string hostAppId; 
        public string fileSize;
        public string fileType;
        public string creationDate;
        public string modifyDate;

        public List<FileBackupInfo> backups;
        public List<FileStreamInfo> streams;
    }

    public class FMSServerInfo
    {
        public string serverId;
        public List<StorageDeviceInfo> storageDevicesAttached;
        public List<HostAppDeviceInfo> hostDevicesAttached;
        public List<FileStreamInfo> filesStreamed;
        public List<FileBackupInfo> fileBackedup;
    }

}
