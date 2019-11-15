<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'test.private_services_locator' shared service.

return $this->services['test.private_services_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'Doctrine\\Common\\Annotations\\Reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService.php', true],
    'Psr\\Cache\\CacheItemPoolInterface' => ['services', 'cache.app', 'getCache_AppService.php', true],
    'Psr\\Container\\ContainerInterface' => ['services', 'service_container', 'getServiceContainerService.php', true],
    'Psr\\Container\\ContainerInterface $parameterBag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
    'Psr\\Log\\LoggerInterface $cacheLogger' => ['privates', 'monolog.logger.cache', 'getMonolog_Logger_CacheService.php', true],
    'Psr\\Log\\LoggerInterface $consoleLogger' => ['privates', 'monolog.logger.console', 'getMonolog_Logger_ConsoleService.php', true],
    'Psr\\Log\\LoggerInterface $eventLogger' => ['privates', 'monolog.logger.event', 'getMonolog_Logger_EventService', false],
    'Psr\\Log\\LoggerInterface $phpLogger' => ['privates', 'monolog.logger.php', 'getMonolog_Logger_PhpService', false],
    'Psr\\Log\\LoggerInterface $requestLogger' => ['privates', 'monolog.logger.request', 'getMonolog_Logger_RequestService', false],
    'Psr\\Log\\LoggerInterface $routerLogger' => ['privates', 'monolog.logger.router', 'getMonolog_Logger_RouterService', false],
    'Symfony\\Component\\Cache\\Adapter\\AdapterInterface' => ['services', 'cache.app', 'getCache_AppService.php', true],
    'Symfony\\Component\\DependencyInjection\\ContainerInterface' => ['services', 'service_container', 'getServiceContainerService.php', true],
    'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => ['privates', 'parameter_bag', 'getParameterBagService', false],
    'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => ['privates', 'parameter_bag', 'getParameterBagService', false],
    'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
    'Symfony\\Component\\Filesystem\\Filesystem' => ['services', 'filesystem', 'getFilesystemService.php', true],
    'Symfony\\Component\\HttpFoundation\\RequestStack' => ['services', 'request_stack', 'getRequestStackService', false],
    'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => ['privates', 'file_locator', 'getFileLocatorService.php', true],
    'Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter' => ['privates', 'debug.file_link_formatter', 'getDebug_FileLinkFormatterService', false],
    'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => ['services', 'http_kernel', 'getHttpKernelService', false],
    'Symfony\\Component\\HttpKernel\\KernelInterface' => ['services', 'kernel', 'getKernelService', false],
    'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => ['services', 'router', 'getRouterService', false],
    'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => ['services', 'router', 'getRouterService', false],
    'Symfony\\Component\\Routing\\RequestContext' => ['privates', 'router.request_context', 'getRouter_RequestContextService', false],
    'Symfony\\Component\\Routing\\RequestContextAwareInterface' => ['services', 'router', 'getRouterService', false],
    'Symfony\\Component\\Routing\\RouterInterface' => ['services', 'router', 'getRouterService', false],
    'Symfony\\Component\\Stopwatch\\Stopwatch' => ['privates', 'debug.stopwatch', 'getDebug_StopwatchService', false],
    'Symfony\\Contracts\\Cache\\CacheInterface' => ['services', 'cache.app', 'getCache_AppService.php', true],
    'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
    'annotation_reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService.php', true],
    'annotations.cache' => ['privates', 'annotations.cache', 'getAnnotations_CacheService.php', true],
    'annotations.cache_warmer' => ['privates', 'annotations.cache_warmer', 'getAnnotations_CacheWarmerService.php', true],
    'annotations.cached_reader' => ['privates', 'annotations.cached_reader', 'getAnnotations_CachedReaderService.php', true],
    'annotations.dummy_registry' => ['privates', 'annotations.dummy_registry', 'getAnnotations_DummyRegistryService.php', true],
    'annotations.reader' => ['privates', 'annotations.reader', 'getAnnotations_ReaderService.php', true],
    'argument_metadata_factory' => ['privates', 'argument_metadata_factory', 'getArgumentMetadataFactoryService', false],
    'argument_resolver' => ['privates', 'debug.argument_resolver', 'getDebug_ArgumentResolverService', false],
    'argument_resolver.controller_locator' => ['privates', '.service_locator.9_yeNH1', 'get_ServiceLocator_9YeNH1Service.php', true],
    'argument_resolver.default' => ['privates', 'debug.argument_resolver.default', 'getDebug_ArgumentResolver_DefaultService.php', true],
    'argument_resolver.not_tagged_controller' => ['privates', 'debug.argument_resolver.not_tagged_controller', 'getDebug_ArgumentResolver_NotTaggedControllerService.php', true],
    'argument_resolver.request' => ['privates', 'debug.argument_resolver.request', 'getDebug_ArgumentResolver_RequestService.php', true],
    'argument_resolver.request_attribute' => ['privates', 'debug.argument_resolver.request_attribute', 'getDebug_ArgumentResolver_RequestAttributeService.php', true],
    'argument_resolver.service' => ['privates', 'debug.argument_resolver.service', 'getDebug_ArgumentResolver_ServiceService.php', true],
    'argument_resolver.session' => ['privates', 'debug.argument_resolver.session', 'getDebug_ArgumentResolver_SessionService.php', true],
    'argument_resolver.variadic' => ['privates', 'debug.argument_resolver.variadic', 'getDebug_ArgumentResolver_VariadicService.php', true],
    'cache.annotations' => ['privates', 'cache.annotations', 'getCache_AnnotationsService.php', true],
    'cache.default_clearer' => ['services', 'cache.app_clearer', 'getCache_AppClearerService.php', true],
    'cache.default_marshaller' => ['privates', 'cache.default_marshaller', 'getCache_DefaultMarshallerService.php', true],
    'config.resource.self_checking_resource_checker' => ['privates', 'config.resource.self_checking_resource_checker', 'getConfig_Resource_SelfCheckingResourceCheckerService.php', true],
    'config_cache_factory' => ['privates', 'config_cache_factory', 'getConfigCacheFactoryService', false],
    'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService.php', true],
    'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService.php', true],
    'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService.php', true],
    'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService.php', true],
    'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService.php', true],
    'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService.php', true],
    'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService.php', true],
    'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService.php', true],
    'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService.php', true],
    'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService.php', true],
    'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService.php', true],
    'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService.php', true],
    'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService.php', true],
    'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService.php', true],
    'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService.php', true],
    'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService.php', true],
    'console.error_listener' => ['privates', 'console.error_listener', 'getConsole_ErrorListenerService.php', true],
    'console.suggest_missing_package_subscriber' => ['privates', 'console.suggest_missing_package_subscriber', 'getConsole_SuggestMissingPackageSubscriberService.php', true],
    'controller_name_converter' => ['privates', 'controller_name_converter', 'getControllerNameConverterService', false],
    'controller_resolver' => ['privates', 'debug.controller_resolver', 'getDebug_ControllerResolverService', false],
    'debug.argument_resolver' => ['privates', 'debug.argument_resolver', 'getDebug_ArgumentResolverService', false],
    'debug.argument_resolver.default' => ['privates', 'debug.argument_resolver.default', 'getDebug_ArgumentResolver_DefaultService.php', true],
    'debug.argument_resolver.default.inner' => ['privates', 'debug.argument_resolver.default.inner', 'getDebug_ArgumentResolver_Default_InnerService.php', true],
    'debug.argument_resolver.inner' => ['privates', 'debug.argument_resolver.inner', 'getDebug_ArgumentResolver_InnerService', false],
    'debug.argument_resolver.not_tagged_controller' => ['privates', 'debug.argument_resolver.not_tagged_controller', 'getDebug_ArgumentResolver_NotTaggedControllerService.php', true],
    'debug.argument_resolver.not_tagged_controller.inner' => ['privates', 'debug.argument_resolver.not_tagged_controller.inner', 'getDebug_ArgumentResolver_NotTaggedController_InnerService.php', true],
    'debug.argument_resolver.request' => ['privates', 'debug.argument_resolver.request', 'getDebug_ArgumentResolver_RequestService.php', true],
    'debug.argument_resolver.request.inner' => ['privates', 'debug.argument_resolver.request.inner', 'getDebug_ArgumentResolver_Request_InnerService.php', true],
    'debug.argument_resolver.request_attribute' => ['privates', 'debug.argument_resolver.request_attribute', 'getDebug_ArgumentResolver_RequestAttributeService.php', true],
    'debug.argument_resolver.request_attribute.inner' => ['privates', 'debug.argument_resolver.request_attribute.inner', 'getDebug_ArgumentResolver_RequestAttribute_InnerService.php', true],
    'debug.argument_resolver.service' => ['privates', 'debug.argument_resolver.service', 'getDebug_ArgumentResolver_ServiceService.php', true],
    'debug.argument_resolver.service.inner' => ['privates', 'debug.argument_resolver.service.inner', 'getDebug_ArgumentResolver_Service_InnerService.php', true],
    'debug.argument_resolver.session' => ['privates', 'debug.argument_resolver.session', 'getDebug_ArgumentResolver_SessionService.php', true],
    'debug.argument_resolver.session.inner' => ['privates', 'debug.argument_resolver.session.inner', 'getDebug_ArgumentResolver_Session_InnerService.php', true],
    'debug.argument_resolver.variadic' => ['privates', 'debug.argument_resolver.variadic', 'getDebug_ArgumentResolver_VariadicService.php', true],
    'debug.argument_resolver.variadic.inner' => ['privates', 'debug.argument_resolver.variadic.inner', 'getDebug_ArgumentResolver_Variadic_InnerService.php', true],
    'debug.controller_resolver' => ['privates', 'debug.controller_resolver', 'getDebug_ControllerResolverService', false],
    'debug.controller_resolver.inner' => ['privates', 'debug.controller_resolver.inner', 'getDebug_ControllerResolver_InnerService', false],
    'debug.debug_handlers_listener' => ['privates', 'debug.debug_handlers_listener', 'getDebug_DebugHandlersListenerService', false],
    'debug.event_dispatcher' => ['services', 'event_dispatcher', 'getEventDispatcherService', false],
    'debug.event_dispatcher.inner' => ['privates', 'debug.event_dispatcher.inner', 'getDebug_EventDispatcher_InnerService', false],
    'debug.file_link_formatter' => ['privates', 'debug.file_link_formatter', 'getDebug_FileLinkFormatterService', false],
    'debug.stopwatch' => ['privates', 'debug.stopwatch', 'getDebug_StopwatchService', false],
    'dependency_injection.config.container_parameters_resource_checker' => ['privates', 'dependency_injection.config.container_parameters_resource_checker', 'getDependencyInjection_Config_ContainerParametersResourceCheckerService.php', true],
    'disallow_search_engine_index_response_listener' => ['privates', 'disallow_search_engine_index_response_listener', 'getDisallowSearchEngineIndexResponseListenerService', false],
    'file_locator' => ['privates', 'file_locator', 'getFileLocatorService.php', true],
    'locale_listener' => ['privates', 'locale_listener', 'getLocaleListenerService', false],
    'monolog.handler.main' => ['privates', 'monolog.handler.main', 'getMonolog_Handler_MainService', false],
    'monolog.handler.nested' => ['privates', 'monolog.handler.nested', 'getMonolog_Handler_NestedService', false],
    'monolog.logger.cache' => ['privates', 'monolog.logger.cache', 'getMonolog_Logger_CacheService.php', true],
    'monolog.logger.console' => ['privates', 'monolog.logger.console', 'getMonolog_Logger_ConsoleService.php', true],
    'monolog.logger.event' => ['privates', 'monolog.logger.event', 'getMonolog_Logger_EventService', false],
    'monolog.logger.php' => ['privates', 'monolog.logger.php', 'getMonolog_Logger_PhpService', false],
    'monolog.logger.request' => ['privates', 'monolog.logger.request', 'getMonolog_Logger_RequestService', false],
    'monolog.logger.router' => ['privates', 'monolog.logger.router', 'getMonolog_Logger_RouterService', false],
    'monolog.processor.psr_log_message' => ['privates', 'monolog.processor.psr_log_message', 'getMonolog_Processor_PsrLogMessageService', false],
    'parameter_bag' => ['privates', 'parameter_bag', 'getParameterBagService', false],
    'resolve_controller_name_subscriber' => ['privates', 'resolve_controller_name_subscriber', 'getResolveControllerNameSubscriberService', false],
    'response_listener' => ['privates', 'response_listener', 'getResponseListenerService', false],
    'router.cache_warmer' => ['privates', 'router.cache_warmer', 'getRouter_CacheWarmerService.php', true],
    'router.default' => ['services', 'router', 'getRouterService', false],
    'router.request_context' => ['privates', 'router.request_context', 'getRouter_RequestContextService', false],
    'router_listener' => ['privates', 'router_listener', 'getRouterListenerService', false],
    'routing.loader.annotation' => ['privates', 'routing.loader.annotation', 'getRouting_Loader_AnnotationService.php', true],
    'routing.loader.annotation.directory' => ['privates', 'routing.loader.annotation.directory', 'getRouting_Loader_Annotation_DirectoryService.php', true],
    'routing.loader.annotation.file' => ['privates', 'routing.loader.annotation.file', 'getRouting_Loader_Annotation_FileService.php', true],
    'routing.loader.directory' => ['privates', 'routing.loader.directory', 'getRouting_Loader_DirectoryService.php', true],
    'routing.loader.glob' => ['privates', 'routing.loader.glob', 'getRouting_Loader_GlobService.php', true],
    'routing.loader.php' => ['privates', 'routing.loader.php', 'getRouting_Loader_PhpService.php', true],
    'routing.loader.service' => ['privates', 'routing.loader.service', 'getRouting_Loader_ServiceService.php', true],
    'routing.loader.xml' => ['privates', 'routing.loader.xml', 'getRouting_Loader_XmlService.php', true],
    'routing.loader.yml' => ['privates', 'routing.loader.yml', 'getRouting_Loader_YmlService.php', true],
    'routing.resolver' => ['privates', 'routing.resolver', 'getRouting_ResolverService.php', true],
    'sb_json_request.request_transformer' => ['privates', 'sb_json_request.request_transformer', 'getSbJsonRequest_RequestTransformerService', false],
    'streamed_response_listener' => ['privates', 'streamed_response_listener', 'getStreamedResponseListenerService', false],
    'symfonylab_customer_io.api' => ['privates', 'symfonylab_customer_io.api', 'getSymfonylabCustomerIo_ApiService.php', true],
    'symfonylab_customer_io.request' => ['privates', 'symfonylab_customer_io.request', 'getSymfonylabCustomerIo_RequestService.php', true],
    'symfonylab_customer_io.tracker' => ['privates', 'symfonylab_customer_io.tracker', 'getSymfonylabCustomerIo_TrackerService.php', true],
    'test.client.cookiejar' => [false, 'test.client.cookiejar', 'getTest_Client_CookiejarService.php', true],
    'test.client.history' => [false, 'test.client.history', 'getTest_Client_HistoryService.php', true],
    'test.session.listener' => ['privates', 'test.session.listener', 'getTest_Session_ListenerService', false],
    'validate_request_listener' => ['privates', 'validate_request_listener', 'getValidateRequestListenerService', false],
], [
    'Doctrine\\Common\\Annotations\\Reader' => '?',
    'Psr\\Cache\\CacheItemPoolInterface' => '?',
    'Psr\\Container\\ContainerInterface' => '?',
    'Psr\\Container\\ContainerInterface $parameterBag' => '?',
    'Psr\\Log\\LoggerInterface $cacheLogger' => '?',
    'Psr\\Log\\LoggerInterface $consoleLogger' => '?',
    'Psr\\Log\\LoggerInterface $eventLogger' => '?',
    'Psr\\Log\\LoggerInterface $phpLogger' => '?',
    'Psr\\Log\\LoggerInterface $requestLogger' => '?',
    'Psr\\Log\\LoggerInterface $routerLogger' => '?',
    'Symfony\\Component\\Cache\\Adapter\\AdapterInterface' => '?',
    'Symfony\\Component\\DependencyInjection\\ContainerInterface' => '?',
    'Symfony\\Component\\DependencyInjection\\ParameterBag\\ContainerBagInterface' => '?',
    'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBagInterface' => '?',
    'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => '?',
    'Symfony\\Component\\Filesystem\\Filesystem' => '?',
    'Symfony\\Component\\HttpFoundation\\RequestStack' => '?',
    'Symfony\\Component\\HttpKernel\\Config\\FileLocator' => '?',
    'Symfony\\Component\\HttpKernel\\Debug\\FileLinkFormatter' => '?',
    'Symfony\\Component\\HttpKernel\\HttpKernelInterface' => '?',
    'Symfony\\Component\\HttpKernel\\KernelInterface' => '?',
    'Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface' => '?',
    'Symfony\\Component\\Routing\\Matcher\\UrlMatcherInterface' => '?',
    'Symfony\\Component\\Routing\\RequestContext' => '?',
    'Symfony\\Component\\Routing\\RequestContextAwareInterface' => '?',
    'Symfony\\Component\\Routing\\RouterInterface' => '?',
    'Symfony\\Component\\Stopwatch\\Stopwatch' => '?',
    'Symfony\\Contracts\\Cache\\CacheInterface' => '?',
    'Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface' => '?',
    'annotation_reader' => '?',
    'annotations.cache' => '?',
    'annotations.cache_warmer' => '?',
    'annotations.cached_reader' => '?',
    'annotations.dummy_registry' => '?',
    'annotations.reader' => '?',
    'argument_metadata_factory' => '?',
    'argument_resolver' => '?',
    'argument_resolver.controller_locator' => '?',
    'argument_resolver.default' => '?',
    'argument_resolver.not_tagged_controller' => '?',
    'argument_resolver.request' => '?',
    'argument_resolver.request_attribute' => '?',
    'argument_resolver.service' => '?',
    'argument_resolver.session' => '?',
    'argument_resolver.variadic' => '?',
    'cache.annotations' => '?',
    'cache.default_clearer' => '?',
    'cache.default_marshaller' => '?',
    'config.resource.self_checking_resource_checker' => '?',
    'config_cache_factory' => '?',
    'console.command.about' => '?',
    'console.command.assets_install' => '?',
    'console.command.cache_clear' => '?',
    'console.command.cache_pool_clear' => '?',
    'console.command.cache_pool_delete' => '?',
    'console.command.cache_pool_list' => '?',
    'console.command.cache_pool_prune' => '?',
    'console.command.cache_warmup' => '?',
    'console.command.config_debug' => '?',
    'console.command.config_dump_reference' => '?',
    'console.command.container_debug' => '?',
    'console.command.debug_autowiring' => '?',
    'console.command.event_dispatcher_debug' => '?',
    'console.command.router_debug' => '?',
    'console.command.router_match' => '?',
    'console.command.yaml_lint' => '?',
    'console.error_listener' => '?',
    'console.suggest_missing_package_subscriber' => '?',
    'controller_name_converter' => '?',
    'controller_resolver' => '?',
    'debug.argument_resolver' => '?',
    'debug.argument_resolver.default' => '?',
    'debug.argument_resolver.default.inner' => '?',
    'debug.argument_resolver.inner' => '?',
    'debug.argument_resolver.not_tagged_controller' => '?',
    'debug.argument_resolver.not_tagged_controller.inner' => '?',
    'debug.argument_resolver.request' => '?',
    'debug.argument_resolver.request.inner' => '?',
    'debug.argument_resolver.request_attribute' => '?',
    'debug.argument_resolver.request_attribute.inner' => '?',
    'debug.argument_resolver.service' => '?',
    'debug.argument_resolver.service.inner' => '?',
    'debug.argument_resolver.session' => '?',
    'debug.argument_resolver.session.inner' => '?',
    'debug.argument_resolver.variadic' => '?',
    'debug.argument_resolver.variadic.inner' => '?',
    'debug.controller_resolver' => '?',
    'debug.controller_resolver.inner' => '?',
    'debug.debug_handlers_listener' => '?',
    'debug.event_dispatcher' => '?',
    'debug.event_dispatcher.inner' => '?',
    'debug.file_link_formatter' => '?',
    'debug.stopwatch' => '?',
    'dependency_injection.config.container_parameters_resource_checker' => '?',
    'disallow_search_engine_index_response_listener' => '?',
    'file_locator' => '?',
    'locale_listener' => '?',
    'monolog.handler.main' => '?',
    'monolog.handler.nested' => '?',
    'monolog.logger.cache' => '?',
    'monolog.logger.console' => '?',
    'monolog.logger.event' => '?',
    'monolog.logger.php' => '?',
    'monolog.logger.request' => '?',
    'monolog.logger.router' => '?',
    'monolog.processor.psr_log_message' => '?',
    'parameter_bag' => '?',
    'resolve_controller_name_subscriber' => '?',
    'response_listener' => '?',
    'router.cache_warmer' => '?',
    'router.default' => '?',
    'router.request_context' => '?',
    'router_listener' => '?',
    'routing.loader.annotation' => '?',
    'routing.loader.annotation.directory' => '?',
    'routing.loader.annotation.file' => '?',
    'routing.loader.directory' => '?',
    'routing.loader.glob' => '?',
    'routing.loader.php' => '?',
    'routing.loader.service' => '?',
    'routing.loader.xml' => '?',
    'routing.loader.yml' => '?',
    'routing.resolver' => '?',
    'sb_json_request.request_transformer' => '?',
    'streamed_response_listener' => '?',
    'symfonylab_customer_io.api' => '?',
    'symfonylab_customer_io.request' => '?',
    'symfonylab_customer_io.tracker' => '?',
    'test.client.cookiejar' => '?',
    'test.client.history' => '?',
    'test.session.listener' => '?',
    'validate_request_listener' => '?',
]);